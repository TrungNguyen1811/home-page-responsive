
<div class="breadcrumb">
    <div class="container">
        <nav aria-label="breadcrumb">
            <?php foreach ($breadcrumb->getItems() as $index => $item): ?>
                <?php if ($item['link'] && $index == count($breadcrumb->getItems()) - 1): ?>
                    <h2><?php echo $item['name']; ?></h2>
                <?php endif; ?> 
            <?php endforeach; ?>
                <ol class="breadcrumb-list">  
                    <?php foreach ($breadcrumb->getItems() as $index => $item): ?>
                        <?php if ($item['link'] && $index < count($breadcrumb->getItems()) - 1): ?>
                            <li class="breadcrumb-item">
                                <a href="<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a>
                            </li>
                        <?php else: ?>
                            <li class="breadcrumb-item active" aria-current="page">
                                <?php echo $item['name']; ?>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ol>

        </nav>
    </div>
</div>
