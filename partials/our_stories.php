<?php 

class Story {
    private string $id;
    private string $title;
    private string $description;
    private bool $active;
    
    public function __construct(string $_id, string $_title, string $_description, bool $_active = false){
        $this->id = $_id;
        $this->title = $_title;
        $this->description = $_description;
        $this->active = $_active;
    }

    public function printHeader(){
        return vsprintf('<button class="nav-link %s" id="%s-tab" data-bs-toggle="tab" data-bs-target="#%s"
                type="button" role="tab" aria-controls="%s" aria-selected="true">%s</button>', [
            $this->active ? 'active' : '',
            $this->id,
            $this->id,
            $this->id,
            $this->title
        ]);
    }

    public function printBody(){
        return vsprintf('<div class="tab-pane fade %s" id="%s" role="tabpanel" 
                aria-labelledby="%s-tab"><p>%s</p></div>', [
            $this->active ? 'show active' : '',
            $this->id,
            $this->id,
            $this->description
        ]);
    }

}

$stories = [
    new Story('nav-who', 'Who We Are', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English. There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humour.', true),
    new Story('nav-vision', 'Our vision', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English. There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humour.'),
    new Story('nav-history','Our History', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English. There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humour.')
]

?>
<div class="about-five-content">
    <h6 class="small-title text-lg">OUR STORY</h6>
    <h2 class="main-title fw-bold">Our team comes with the experience and knowledge</h2>
    <div class="about-five-tab">
        <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <?php foreach($stories as $story){ ?>
                <?= $story->printHeader() ?>
            <?php } ?>
        </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <?php foreach($stories as $story){ ?>
                <?= $story->printBody() ?>
            <?php } ?>
        </div>
    </div>
</div>