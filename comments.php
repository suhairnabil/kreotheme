<div id="comments">

    
 <h3 class='commnets_number' > <?=get_comments_number()?> Comments </h3>
 <?php //wp_list_comments();?>

 <?php $comments_loop= new WP_Comment_Query();
 $comments=$comments_loop->query([
    'status' => 'approve',
    'post_id'=> get_the_ID(),
 ]);
        if($comments) :
 
 ?>
 <ol class="commentlist">
     <?php foreach($comments as $comment) : 
       
        ?>
<li class="depth-1 comment">

    <div class="comment__avatar">
        <?= get_avatar($comment->comment_author_email,50); ?>
    </div>

    <div class="comment__content">

        <div class="comment__info">
            <div class="comment__author"><?=$comment->comment_author?></div>

            <div class="comment__meta">
                <div class="comment__time"><?=$comment->comment_date?></div>
                <div class="comment__reply">
                    <a class="comment-reply-link" href="#0">Reply</a>
                </div>
            </div>
        </div>

        <div class="comment__text">
        <p><?=$comment->comment_content?></p>
        </div>

    </div>

</li> <!-- end comment level 1 -->
<?php endforeach ; ?>
</ol>
<?php endif; ?>

<?php
if(comments_open()):
 comment_form([
    'label_submit' => "Send a comment ..> ",
     'title_reply'=>' Add New Comment . ',
     
     'fields'=>[
         'author'=>'<input type="text" name="author" id="" value="" placeholder="Your Name" >',
         'email'=>'<input type="email" name="email" id="" value="" placeholder="Your Email" >',
         'url'=>'<input type="text" name="url" id="" value="" placeholder="URL" >',
     ],
     'class_container'=>'comments_response',
      'comment_field' => '<textarea id="comment" name="comment" required="required" placeholder="Write a comment here ... "></textarea>',

 //    'id_form'=>'',
 //    'class_submit'=>'',
 //    

 ]);
endif;
 ?>


</div>