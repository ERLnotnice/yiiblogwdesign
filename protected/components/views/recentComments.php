<div class="max-w-4xl mx-auto mt-12">
    <h2 class="text-2xl font-semibold mb-4 text-gray-800">Recent Comments</h2>
    <ul class="space-y-4">
        <?php foreach($this->getRecentComments() as $comment): ?>
            <li class="bg-white p-4 rounded-lg shadow-md">
                <p class="text-gray-700">
                    <?php echo CHtml::link(CHtml::encode($comment->author), array('post/view', 'id'=>$comment->post->id), array('class' => 'text-blue-600 hover:underline')); ?>
                    on
                    <span class="font-semibold"><?php echo CHtml::encode($comment->post->title); ?></span>
                </p>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
