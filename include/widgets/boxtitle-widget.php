<?php


class Boxdescription_Widgets extends WP_Widget
{

    public function __construct()
    {
        parent::__construct(
            'kreo_boxdescription_widget',
            'Kreo box description Widget'
        );
    }
    public function form($instance)
    {
        printf('<p>
        <lable for="%s" >Title</lable>
        <input type="text" name="%s" id="%s" value="%s" >
            </p>',
            $this->get_field_id('title'),
            $this->get_field_name('title'),
            $this->get_field_id('title'),
            $instance['title']?? ''  

        );



    }

    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        if($instance['title']){
            echo $args['before_title'];
            echo $instance['title'];
            echo $args['after_title'];
        }
        echo '
            <p>Description</p>
            <form >
            <input type="email" placeholder="email">
            <input type=submit name="" value="Send"> 
            </form>
        ';
        echo $args['after_widget'];
    }
    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }
}
