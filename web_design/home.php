<?php
require_once 'dbconfig.php';
include('header.php');
?>
		<p id="Start"></p>
		<div id ="page">
			<section>
				<?php include('row_count.php'); ?>
				<div id="page-wrap">
					<table>
					<?php             
                        if (isset($_SESSION['username'])){
                                $sql = "SELECT title, location, date, link, description
                                 FROM demo ORDER BY date DESC LIMIT ".($x * $n).", $x";
                                $stmt = $dbc->prepare($sql);
                                $stmt->execute();
                                $result = $stmt->fetchAll();
                                echo '<form name="add_fav" method="POST" action="addfav.php" enctype="">';
                               foreach ($result as $row){
                                            echo "<tr style='padding-top: 50px;'><td><a href=''><img style=' with:25px; height:25px;' src='http://findicons.com/files/icons/767/wp_woothemes_ultimate/128/star.png'></a><input type='checkbox' name='links[]' value='" . $row['link'] . "'></td><td><a href=" . $row['link']. ">".$row['title'] . "</a></td><td>" . $row['location'] . "</td></tr>";
                                   //if (preg_match('jobs', $row['link'] ) ){
                                        echo "<tr> <td colspan=3>" . $row['description'] . "</td></tr>";
                                  //  } else{
                                   //     echo "<tr> <td> Description is not large enough. Please go to the original website :^) </td>   </tr>";
                                   // }
                                }
                                echo '<input class="Button" type="submit" value="Add Favourites"/>';
                                echo '</form>';
                           // }
                        }
                        else {
                            $sql = "SELECT title, location, date, link, description
							 FROM demo ORDER BY date DESC LIMIT ".($x * $n).", $x";
                            $stmt = $dbc->prepare($sql);
                            $stmt->execute();
                            $result = $stmt->fetchAll();
                            foreach ($result as $row){
                                echo "<tr class='spaceUnder'><td><a href=" . $row['link']. ">".$row['title'] . "</a></td><td>" . $row['location'] . "</td></tr>";
                               //  if (!preg_match('/eurax/', $row['link']) ){
                                        echo "<tr> <td colspan=2>" . $row['description'] . "</td>   </tr>";
                              //      } else{
                              //          echo "<tr> <td> Description is not large enough. Please go to the original website :^) </td>   </tr>";
                               //     }
                            }
                        }
						$dbc=null;
					?>
					</table>

					<?php include('prev_next.php'); ?>
				</div>
			</section>
			<div id="go_to">
				<a href="#Start">
					<img src="style/uparrow.png" alt="Go_to_Top" style="width:30px;height:30px;">
				</a>
			</div>
			<aside>
				<a href="http://mmb.pcb.ub.es/formacio/~dbw00/">
					<img src="style/master_logo.jpg" alt="Home_img" style="width:425px;height:125px;">
				</a>
			</aside>
		</div>
<?php include('footer.php');?>
