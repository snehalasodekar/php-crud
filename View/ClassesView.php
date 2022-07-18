
<form method="post" name="buttons">
    <?php foreach($allClassesArray as $classRoom): ?>
    <?php echo $classRoom->getId(). " " .$classRoom->getName(). " " .$classRoom->getLocation(); ?>
        <button type="submit" name="create" value="<?php echo $classRoom->getId() ?>">CREATE</button>
        <button type="submit" name="info" value="<?php echo $classRoom->getId() ?>">info</button>
        <button type="submit" name="delete" value="<?php echo $classRoom->getId() ?>">Delete</button><br/>
    <?php endforeach; ?>
</form>