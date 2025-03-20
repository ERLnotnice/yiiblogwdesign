<?php /* @var $this PostController */ ?>

<?php $this->pageTitle = Yii::app()->name . ' - Create Post'; ?>

<div class="max-w-4xl mx-auto mt-12">

    <h1 class="text-5xl font-extrabold text-center text-[#ff6ef4]">Create Post</h1>

    <div class="mt-8 flex justify-end space-x-4">
        <?php echo CHtml::link('List Posts', array('index'), array('class' => 'bg-blue-500 text-white py-3 px-5 rounded-lg hover:bg-blue-600 shadow-lg transition-transform transform hover:scale-105')); ?>
        <?php echo CHtml::link('Manage Posts', array('admin'), array('class' => 'bg-gray-500 text-white py-3 px-5 rounded-lg hover:bg-gray-600 shadow-lg transition-transform transform hover:scale-105')); ?>
    </div>

    <div class="mt-8 bg-white p-6 rounded-lg shadow-md">
        <style>
            input[type="text"], select, textarea {
                border: 2px solid #D3D3D3;
                padding: 0.75rem;
                border-radius: 0.5rem;
                width: 100%;
                margin-bottom: 1rem;
                outline: none;
                transition: border-color 0.3s;
            }
            input[type="text"]:focus, select:focus, textarea:focus {
                border-color: #ff6ef4;
            }
        </style>
        <?php $this->renderPartial('_form', array('model' => $model)); ?>
    </div>

</div>
