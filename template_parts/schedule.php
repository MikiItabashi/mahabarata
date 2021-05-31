<!-- schedule -->
<section class="schedule wow fadeInUp">
    <div class="container">
        <div class="schedule-box">
            <h2 class="title">SCHEDULE</h2>
            <div class="schedule-table">
                <table class="table">
                    <?php
                    $field_group = SCF::get('schedule', 24);
                    foreach ($field_group as $field) {
                    ?>
                        <tr>
                            <th><?php echo $field['schedule_date']; ?></th>
                            <td><?php echo $field['schedule_time']; ?>開演</td>
                            <td><?php echo $field['schedule_place']; ?></td>
                            <td><a href="<?php echo $field['schedule_url']; ?>" class="underline"> チケット予約受付中</a></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <div class="schedule-buttons">
            <a href="../inquiry" class="button button-dark big">お問い合わせはこちら</a>
            <a href="" class="button button-light big">チケット予約サイトへ</a>
        </div>
    </div>
</section>
<!-- /schedule -->