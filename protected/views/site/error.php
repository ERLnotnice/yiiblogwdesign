<?php /* @var $this SiteController */ ?>

<?php $this->pageTitle = Yii::app()->name . ' - Error'; ?>

<div class="max-w-4xl mx-auto mt-12">

    <h2 class="text-4xl font-bold text-center text-[#ff6ef4]">Error <?php echo $code; ?></h2>

    <div class="mt-6 bg-white p-8 rounded-lg shadow-lg">
        <p class="text-gray-700 text-center"><?php echo CHtml::encode($message); ?></p>
    </div>

</div>
