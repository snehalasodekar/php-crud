
<form method="post">
    <p>test OK</p>
    <?php foreach($allClassesArray as $classRoom): ?>
    <?php echo $classRoom->getId(). " " .$classRoom->getName(). " " .$classRoom->getLocation(). " " .$classRoom->getTeachers(). " " .$classRoom->getStudents(); ?>
        <button type="submit" name="info" value="<?php $classRoom->getId() ?>">show class info</button>
        <button type="submit" name="edit" value="<?php $classRoom->getId() ?>">Edit</button>
        <button type="submit" name="delete" value="<?php $classRoom->getId() ?>">Delete</button><br/>
    <?php endforeach; ?>
</form>