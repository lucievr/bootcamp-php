<?php

require_once 'BlogPost.php';
$all_posts = [];
$total_posts = 0;
$first_post = new BlogPost(1);
$first_post->id = 1;
$first_post->headline = 'The first post';
$first_post->text = 'I have decided to write my own blog. This is my first post, beautiful in it\'s simplicity.';
$first_post->added_at = date('Y-m-d H:i:s');
$first_post->user_id = 1;
$first_post->status = 'published';
$second_post = new BlogPost(2, 'My second post');
$second_post->publish();
var_dump($first_post);
var_dump($second_post);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blog</title>
</head>
<body>

    <?php foreach ($all_posts as $post) : ?>

        <div class="post">
            <h2><?= $post->headline ?></h2>
            <p>
                <?= $post->text ?>
            </p>
            <div class="added">Added at: <?= $post->added_at ?></div>
        </div>

    <?php endforeach; ?>
    
</body>
</html>

<!-- BlogPost.php -->
<?php
class BlogPost
{
    public $id = null;
    public $headline = null;
    public $text = null;
    public $added_at = null;
    public $user_id = null;
    public $status = 'not-published';
    public function __construct($user_id, $headline = null)
    {
        $this->added_at = date('Y-m-d');
        $this->user_id = $user_id;
        $this->headline = $headline;
        global $all_posts;
        $all_posts[] = $this;
        global $total_posts;
        $total_posts++;
    }
    public function publish()
    {
        $this->status = 'published';
    }
    public function __destruct()
    {
        global $total_posts;
        $total_posts--;
    }
}