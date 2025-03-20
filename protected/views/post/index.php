<?php /* @var $this PostController */ ?>

<?php $this->pageTitle = Yii::app()->name . ' - Posts'; ?>

<div class="max-w-6xl mx-auto mt-12">

    <h1 class="text-5xl font-extrabold text-center text-[#ff6ef4]">Posts</h1>

    <?php if (!empty($_GET['tag'])): ?>
        <h2 class="text-2xl font-semibold text-center mt-4">Posts Tagged with <i><?php echo CHtml::encode($_GET['tag']); ?></i></h2>
    <?php endif; ?>

    <div class="mt-8 flex justify-end space-x-4">
        <?php echo CHtml::link('Create Post', array('create'), array('class' => 'bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600')); ?>
        <?php echo CHtml::link('Manage Posts', array('admin'), array('class' => 'bg-gray-500 text-white py-2 px-4 rounded-lg hover:bg-gray-600')); ?>
    </div>

    <div class="mt-8 space-y-12">
        <?php $this->widget('zii.widgets.CListView', array(
            'dataProvider' => $dataProvider,
            'itemView' => '_view',
            'template' => "{items}\n{pager}",
            'pager' => array(
                'header' => '',
                'htmlOptions' => array('class' => 'pagination flex justify-center mt-8'),
            ),
            'itemsCssClass' => 'space-y-12', // Adds spacing between post containers
            'itemsCssClass' => 'border border-gray-300 rounded-lg p-4', // Adds border around each post
        )); ?>
    </div>

</div>
