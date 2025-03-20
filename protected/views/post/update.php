<?php /* @var $this PostController */ ?>

<?php $this->pageTitle = Yii::app()->name . ' - Update Post'; ?>

<div class="max-w-4xl mx-auto mt-12">

    <h1 class="text-4xl font-bold text-center text-[#ff6ef4]">Update Post #<?php echo $model->id; ?></h1>

    <div class="mt-8 bg-white p-6 rounded-lg shadow-md">
        <?php $this->renderPartial('_form', array('model' => $model)); ?>
    </div>

    <div class="mt-12 flex space-x-4">
        <?php echo CHtml::link('View Post', array('view', 'id' => $model->id), array('class' => 'bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600')); ?>
        <?php echo CHtml::link('Back to List', array('index'), array('class' => 'bg-gray-500 text-white py-2 px-4 rounded-lg hover:bg-gray-600')); ?>
    </div>

</div>
