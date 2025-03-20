<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div class="grid grid-cols-1 md:grid-cols-4 gap-8">

    <!-- Main Content -->
    <div class="md:col-span-3">
        <div id="content" class="bg-white p-6 rounded-lg shadow">
            <?php echo $content; ?>
        </div>
    </div>

    <!-- Sidebar -->
    <aside class="md:col-span-1 space-y-6">
        <?php if (!Yii::app()->user->isGuest): ?>
            <div class="bg-white p-4 rounded-lg shadow">
                <?php $this->widget('UserMenu'); ?>
            </div>
        <?php endif; ?>

        <div class="bg-white p-4 rounded-lg shadow">
            <?php $this->widget('TagCloud', array(
                'maxTags' => Yii::app()->params['tagCloudCount'],
            )); ?>
        </div>

        <div class="bg-white p-4 rounded-lg shadow">
            <?php $this->widget('RecentComments', array(
                'maxComments' => Yii::app()->params['recentCommentCount'],
            )); ?>
        </div>
    </aside>

</div>

<?php $this->endContent(); ?>
