<?php /* @var $this SiteController */ ?>

<?php $this->pageTitle = Yii::app()->name; ?>

<div class="max-w-4xl mx-auto mt-12">

    <h1 class="text-4xl font-bold text-center text-[#2e3bff]">Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

    <p class="mt-6 text-center text-gray-600">Congratulations! You have successfully created your Yii application.</p>

    <div class="mt-8 bg-white p-8 rounded-lg shadow-lg">
        <p class="text-gray-700 mb-4">You may change the content of this page by modifying the following two files:</p>

        <ul class="list-disc list-inside mb-6">
            <li>View file: <code class="bg-gray-200 p-1 rounded"><?php echo __FILE__; ?></code></li>
            <li>Layout file: <code class="bg-gray-200 p-1 rounded"><?php echo $this->getLayoutFile('main'); ?></code></li>
        </ul>

        <p class="text-gray-700">For more details on how to further develop this application, please read the
            <a href="https://www.yiiframework.com/doc/" class="text-[#2e3bff] hover:underline">documentation</a>.
            Feel free to ask in the <a href="https://www.yiiframework.com/forum/" class="text-[#2e3bff] hover:underline">forum</a>,
            should you have any questions.</p>
    </div>

</div>
