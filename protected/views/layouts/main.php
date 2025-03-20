<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        accentPink: '#ff6ef4',
                        accentBlue: '#2e3bff',
                    }
                }
            }
        };
    </script>
</head>
<body class="bg-gray-100 text-gray-900">

<div class="container mx-auto px-4" id="page">

    <!-- Header -->
    <header class="py-6 border-b border-gray-300 flex justify-between items-center">
        <h1 class="text-3xl font-bold text-accentPink">
            <?php echo CHtml::encode(Yii::app()->name); ?>
        </h1>

        <nav>
            <?php $this->widget('zii.widgets.CMenu', array(
                'items' => array(
                    array('label' => 'Home', 'url' => array('/site/index')),
                    array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
                    array('label' => 'Contact', 'url' => array('/site/contact')),
                    array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                    array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                ),
                'htmlOptions' => array('class' => 'flex space-x-6'),
                'itemCssClass' => 'text-lg text-gray-700 hover:text-accentBlue',
            )); ?>
        </nav>
    </header>

    <!-- Breadcrumbs -->
    <?php if (isset($this->breadcrumbs)): ?>
        <div class="my-4 text-sm text-gray-600">
            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                'links' => $this->breadcrumbs,
            )); ?>
        </div>
    <?php endif; ?>

    <!-- Main Content -->
    <main class="py-8">
        <?php echo $content; ?>
    </main>

    <!-- Footer -->
    <footer class="py-6 mt-12 border-t border-gray-300 text-center text-sm text-gray-600">
        &copy; <?php echo date('Y'); ?> by My Company. All Rights Reserved.<br>
        <?php echo Yii::powered(); ?>
    </footer>

</div>

</body>
</html>
