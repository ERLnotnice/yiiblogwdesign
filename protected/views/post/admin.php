<?php /* @var $this PostController */ ?>

<?php $this->pageTitle = CHtml::encode(Yii::app()->name . ' - Manage Posts'); ?>

<div class="container mx-auto px-6 mt-12" id="page">

    <!-- Page Title -->
    <h1 class="text-6xl font-black text-center text-accentPink mb-12">Manage Posts</h1>

    <!-- Action Buttons -->
    <div class="flex justify-between items-center mb-8">
        <div>
            <?php echo CHtml::link('Create Post', array('create'), array('class' => 'bg-accentBlue text-white py-3 px-6 rounded-full hover:bg-blue-600 transition shadow-lg')); ?>
            <?php echo CHtml::link('List Posts', array('index'), array('class' => 'ml-4 bg-gray-500 text-white py-3 px-6 rounded-full hover:bg-gray-600 transition shadow-lg')); ?>
        </div>
    </div>

    <!-- Posts Table -->
    <div class="bg-white p-8 rounded-3xl shadow-2xl border border-gray-200 overflow-hidden">
        <?php $this->widget('zii.widgets.grid.CGridView', array(
            'dataProvider' => $model->search(),
            'filter' => $model,
            'itemsCssClass' => 'w-full text-left border border-gray-300 border-collapse',
            'htmlOptions' => array('class' => 'overflow-x-auto'),
            'filterCssClass' => 'bg-gray-50 border border-gray-300 p-2 rounded-lg mb-4',
            'columns' => array(
                array(
                    'name' => 'title',
                    'type' => 'raw',
                    'value' => 'CHtml::link(CHtml::encode($data->title), $data->url)',
                    'headerHtmlOptions' => array('class' => 'py-4 px-6 bg-gray-100 text-gray-800 border border-gray-300 uppercase tracking-wider'),
                    'htmlOptions' => array('class' => 'py-4 px-6 border border-gray-300'),
                    'filterHtmlOptions' => array('class' => 'p-2 border border-gray-300 rounded-lg'),
                ),
                array(
                    'name' => 'status',
                    'value' => 'Lookup::item("PostStatus", $data->status)',
                    'filter' => Lookup::items('PostStatus'),
                    'headerHtmlOptions' => array('class' => 'py-4 px-6 bg-gray-100 text-gray-800 border border-gray-300 uppercase tracking-wider'),
                    'htmlOptions' => array('class' => 'py-4 px-6 border border-gray-300'),
                    'filterHtmlOptions' => array('class' => 'p-2 border border-gray-300 rounded-lg'),
                ),
                array(
                    'name' => 'create_time',
                    'type' => 'datetime',
                    'filter' => false,
                    'headerHtmlOptions' => array('class' => 'py-4 px-6 bg-gray-100 text-gray-800 border border-gray-300 uppercase tracking-wider'),
                    'htmlOptions' => array('class' => 'py-4 px-6 border border-gray-300'),
                ),
                array(
                    'class' => 'CButtonColumn',
                    'header' => 'Actions',
                    'template' => '{view} {update} {delete}',
                    'buttons' => array(
                        'view' => array('options' => array('class' => 'text-accentBlue hover:underline font-medium')),
                        'update' => array('options' => array('class' => 'text-green-600 hover:underline font-medium')),
                        'delete' => array('options' => array('class' => 'text-red-600 hover:underline font-medium')),
                    ),
                    'headerHtmlOptions' => array('class' => 'py-4 px-6 bg-gray-100 text-gray-800 border border-gray-300 uppercase tracking-wider'),
                    'htmlOptions' => array('class' => 'py-4 px-6 border border-gray-300'),
                ),
            ),
        )); ?>
    </div>

</div>
