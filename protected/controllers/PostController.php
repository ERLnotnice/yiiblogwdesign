<?php

class PostController extends Controller
{
	public $layout='//layouts/column2';

	public function filters()
	{
		return array(
			'accessControl',
			'postOnly + delete',
		);
	}

	public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('index', 'view'),
				'users'=>array('*'),
			),
			array('allow',
				'users'=>array('@'),
			),
			array('deny',
				'users'=>array('*'),
			),
		);
	}

	public function actionView()
	{
		$post = $this->loadModel();
		$comment = $this->newComment($post);

		$this->render('view', array(
			'model' => $post,
			'comment' => $comment,
		));
	}

	public function actionCreate()
	{
		$model = new Post;

		if (isset($_POST['Post'])) {
			$model->attributes = $_POST['Post'];
			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array(
			'model' => $model,
		));
	}

	public function actionUpdate($id)
	{
		$model = $this->loadModel($id);

		if (isset($_POST['Post'])) {
			$model->attributes = $_POST['Post'];
			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
			'model' => $model,
		));
	}

	public function actionDelete()
	{
		if (Yii::app()->request->isPostRequest) {
			$this->loadModel()->delete();
			if (!isset($_GET['ajax'])) {
				$this->redirect(array('index'));
			}
		} else {
			throw new CHttpException(400, 'Invalid request.');
		}
	}

	public function actionIndex()
	{
		$criteria = new CDbCriteria(array(
			'condition' => 'status=' . Post::STATUS_PUBLISHED,
			'order' => 'update_time DESC',
			'with' => 'commentCount',
		));

		if (isset($_GET['tag'])) {
			$criteria->addSearchCondition('tags', $_GET['tag']);
		}

		$dataProvider = new CActiveDataProvider('Post', array(
			'pagination' => array('pageSize' => 5),
			'criteria' => $criteria,
		));

		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin()
	{
		$model = new Post('search');
		if (isset($_GET['Post'])) {
			$model->attributes = $_GET['Post'];
		}
		$this->render('admin', array('model' => $model));
	}

	private $_model;

	public function loadModel($id = null)
	{
		if ($this->_model === null) {
			if ($id === null && isset($_GET['id'])) {
				$id = $_GET['id'];
			}
			if (Yii::app()->user->isGuest) {
				$condition = 'status=' . Post::STATUS_PUBLISHED . ' OR status=' . Post::STATUS_ARCHIVED;
			} else {
				$condition = '';
			}
			$this->_model = Post::model()->findByPk($id, $condition);

			if ($this->_model === null) {
				throw new CHttpException(404, 'The requested page does not exist.');
			}
		}
		return $this->_model;
	}

	protected function afterDelete()
	{
		parent::afterDelete();
		Comment::model()->deleteAll('post_id=' . $this->id);
		Tag::model()->updateFrequency($this->tags, '');
	}

	protected function newComment($post)
	{
		$comment = new Comment;

		if (isset($_POST['ajax']) && $_POST['ajax'] === 'comment-form') {
			echo CActiveForm::validate($comment);
			Yii::app()->end();
		}

		if (isset($_POST['Comment'])) {
			$comment->attributes = $_POST['Comment'];
			if ($post->addComment($comment)) {
				if ($comment->status == Comment::STATUS_PENDING) {
					Yii::app()->user->setFlash('commentSubmitted', 'Thank you! Your comment is pending approval.');
				}
				$this->refresh();
			}
		}

		return $comment;
	}

	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'post-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
