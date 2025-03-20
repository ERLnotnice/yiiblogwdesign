<?php /* @var $this SiteController */ ?>
<?php /* @var $model LoginForm */ ?>
<?php /* @var $form CActiveForm */ ?>

<?php $this->pageTitle = Yii::app()->name . ' - Login'; ?>
<?php $this->breadcrumbs = array('Login'); ?>

<div class="max-w-lg mx-auto mt-12">

    <h1 class="text-3xl font-bold text-center text-[#2e3bff]">Login</h1>

    <p class="mt-4 text-center text-gray-600">Please fill out the following form with your login credentials:</p>

    <div class="mt-8 bg-white p-8 rounded-lg shadow">
        <?php $form = $this->beginWidget('CActiveForm', array(
            'id' => 'login-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
        )); ?>

        <p class="text-sm text-gray-500 mb-4">Fields with <span class="text-[#ff6ef4]">*</span> are required.</p>

        <div class="mb-6">
            <?php echo $form->labelEx($model, 'username', array('class' => 'block text-gray-700')); ?>
            <?php echo $form->textField($model, 'username', array('class' => 'w-full mt-2 p-3 border rounded-lg focus:ring-2 focus:ring-[#2e3bff]')); ?>
            <?php echo $form->error($model, 'username', array('class' => 'text-red-500 text-sm')); ?>
        </div>

        <div class="mb-6">
            <?php echo $form->labelEx($model, 'password', array('class' => 'block text-gray-700')); ?>
            <?php echo $form->passwordField($model, 'password', array('class' => 'w-full mt-2 p-3 border rounded-lg focus:ring-2 focus:ring-[#2e3bff]')); ?>
            <?php echo $form->error($model, 'password', array('class' => 'text-red-500 text-sm')); ?>
            <p class="text-sm text-gray-500 mt-2">Hint: You may login with <kbd class="bg-gray-200 p-1 rounded">demo</kbd>/<kbd class="bg-gray-200 p-1 rounded">demo</kbd> or <kbd class="bg-gray-200 p-1 rounded">admin</kbd>/<kbd class="bg-gray-200 p-1 rounded">admin</kbd>.</p>
        </div>

        <div class="mb-6 flex items-center">
            <?php echo $form->checkBox($model, 'rememberMe', array('class' => 'mr-2')); ?>
            <?php echo $form->label($model, 'rememberMe', array('class' => 'text-gray-700')); ?>
            <?php echo $form->error($model, 'rememberMe', array('class' => 'text-red-500 text-sm')); ?>
        </div>

        <div class="text-center">
            <?php echo CHtml::submitButton('Login', array('class' => 'px-6 py-3 bg-[#2e3bff] text-white font-semibold rounded-lg hover:bg-[#ff6ef4] transition')); ?>
        </div>

        <?php $this->endWidget(); ?>
    </div>

</div>
