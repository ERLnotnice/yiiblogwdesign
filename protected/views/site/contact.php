<?php /* @var $this SiteController */ ?>

<?php $this->pageTitle = Yii::app()->name . ' - Contact Us'; ?>

<div class="max-w-4xl mx-auto mt-12">

    <h1 class="text-4xl font-bold text-center text-[#ff6ef4]">Contact Us</h1>

    <?php if(Yii::app()->user->hasFlash('contact')): ?>

        <div class="mt-6 bg-green-100 p-4 rounded-lg shadow-md text-green-800">
            <?php echo Yii::app()->user->getFlash('contact'); ?>
        </div>

    <?php else: ?>

        <p class="text-gray-700 text-center mt-6">If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.</p>

        <div class="form mt-8">

            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'contact-form',
                'enableClientValidation'=>true,
                'clientOptions'=>array(
                    'validateOnSubmit'=>true,
                ),
            )); ?>

            <p class="note">Fields with <span class="text-red-500">*</span> are required.</p>

            <?php echo $form->errorSummary($model, '<div class="bg-red-100 p-4 rounded-lg text-red-800">', '</div>'); ?>

            <div class="mb-4">
                <?php echo $form->labelEx($model,'name', array('class'=>'block font-semibold mb-2')); ?>
                <?php echo $form->textField($model,'name', array('class'=>'w-full p-2 border rounded-lg')); ?>
                <?php echo $form->error($model,'name', array('class'=>'text-red-500')); ?>
            </div>

            <div class="mb-4">
                <?php echo $form->labelEx($model,'email', array('class'=>'block font-semibold mb-2')); ?>
                <?php echo $form->textField($model,'email', array('class'=>'w-full p-2 border rounded-lg')); ?>
                <?php echo $form->error($model,'email', array('class'=>'text-red-500')); ?>
            </div>

            <div class="mb-4">
                <?php echo $form->labelEx($model,'subject', array('class'=>'block font-semibold mb-2')); ?>
                <?php echo $form->textField($model,'subject', array('class'=>'w-full p-2 border rounded-lg', 'size'=>60, 'maxlength'=>128)); ?>
                <?php echo $form->error($model,'subject', array('class'=>'text-red-500')); ?>
            </div>

            <div class="mb-4">
                <?php echo $form->labelEx($model,'body', array('class'=>'block font-semibold mb-2')); ?>
                <?php echo $form->textArea($model,'body', array('class'=>'w-full p-2 border rounded-lg', 'rows'=>6, 'cols'=>50)); ?>
                <?php echo $form->error($model,'body', array('class'=>'text-red-500')); ?>
            </div>

            <?php if(CCaptcha::checkRequirements()): ?>
                <div class="mb-4">
                    <?php echo $form->labelEx($model,'verifyCode', array('class'=>'block font-semibold mb-2')); ?>
                    <div class="flex items-center">
                        <?php $this->widget('CCaptcha'); ?>
                        <?php echo $form->textField($model,'verifyCode', array('class'=>'ml-4 p-2 border rounded-lg')); ?>
                    </div>
                    <p class="text-sm text-gray-500">Please enter the letters as they are shown in the image above. Letters are not case-sensitive.</p>
                    <?php echo $form->error($model,'verifyCode', array('class'=>'text-red-500')); ?>
                </div>
            <?php endif; ?>

            <div class="mt-6">
                <?php echo CHtml::submitButton('Submit', array('class'=>'bg-[#ff6ef4] text-white py-2 px-6 rounded-lg hover:bg-[#e05ec2]')); ?>
            </div>

            <?php $this->endWidget(); ?>

        </div>

    <?php endif; ?>

</div>
