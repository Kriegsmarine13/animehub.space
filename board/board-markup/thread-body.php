            <div class="b-post first-post">            
                <div class="post-number">#<?php echo $thread->thread_id; ?></div>
                
               <?php echo $thread->post; ?>

                <div class="hide-text">
                <p> <code>php_value max_execution_time 180000</code>.</p>

                <p>В <code>phpinfo()</code> все мои изменения показывал.
                У меня выделенный сервер. Ответ от поддержки:</p>

                <blockquote>Выполнение скриптов зависит от настройки вашего программного обеспечения.</blockquote>
                <p>На Денвере тот же скрипт обрабатывается до 500 секунд!
                Подскажите, пожалуйста, как заставить скрипт обрабатываться максимально возможное 
                количество времени на моём сервере?</p>
                </div>
            </div>

            
            <?php 
            if (isset($comments)) {
                for ($i=0;$i<$comments;$i++) {
                echo '<div class="b-post">';
		    echo '<div class="post-number">#';
		    
  		    //if (isset($comment_arr)) {
  			try {
  			echo $comment_arr[$i][0];
  			} catch (Exception $e) {}
  		    //} else echo "test";
		    echo '</div>';
		    echo '<p>';
		    echo $comment_arr[$i][2];
		    echo '</p></div>';
		}
	    }
	    if ($noPosts) echo "<div class='no-comments'>Комментариев к этому треду еще нет</div>";
            ?>            