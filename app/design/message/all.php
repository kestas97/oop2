<div class="wrapper">


    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Surname</td>
            <td>Email</td>
            <td>Show Message</td>

        </tr>
            <?php
            /**
             * @var \Model\Message $msg
             */
            foreach($this->data['messages'] as $msg): ?>
                <tr>

                    <td><?= $msg->getId()?></td>
                    <td><?= $msg->getName()?></td>
                    <td><?= $msg->getSurname()?></td>
                    <td><?= $msg->getEmail()?></td>
                    <td><a href="<?php echo $this->url('records/show', $msg->getId()) ?>">Show more</a> </td>
                    <td><a href="<?php echo $this->url('records/delete', $msg->getId()) ?>">Delete</a> </td>
                    <td>

                    </td>
                </tr>
            <?php endforeach; ?>
    </table>