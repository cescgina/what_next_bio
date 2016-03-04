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
                                $checkid=0;
                                foreach ($result as $row){
                                            echo "<tr><td>";
                                            echo "<input type='checkbox' class='checks' name='links[]' value='" . $row['link'] . "' id='check".$checkid."' style='display: none;'>";
                                            echo "<label class='favbutton' style=' width:25px; height:25px;' for='check".$checkid."'>";
                                            echo "<img style=' width:25px; height:25px;' src='style/star.png'></label>";
                                    echo "</td><td><a href=" . $row['link']. "><b>".$row['title'] . "</b></a></td><td>" . $row['location'] . "</td></tr>";

                                   if (!preg_match('/eurax/', $row['link'] ) ){
                                        echo "<tr><td></td> <td colspan=2>" . $row['description'] . "</td></tr>";
                                    } else{
                                        echo "<tr><td></td> <td colspan=2> <i>Description is not large enough. Please go to the original website :^) </i></td>   </tr>";
                                    }
                                    $checkid++;
                                }
                                echo '<input class="Button" type="submit" value="Add Favourites"/>';
                                echo '</form>';

                        }
                        else {
                            $sql = "SELECT title, location,description, date, link
							FROM demo ORDER BY date DESC LIMIT ".($x * $n).", $x";

                            $stmt = $dbc->prepare($sql);
                            $stmt->execute();
                            $result = $stmt->fetchAll();
                            foreach ($result as $row){
                                 echo "<tr><td><a href=" . $row['link']. "><b>".$row['title'] . "</b></a></td>";
                                 echo "<td>" . $row['location'] . "</td></tr>";
                                 if (!preg_match('/eurax/', $row['link']) ){						                  			             echo "<tr class='spaceUnder'> <td colspan=2>" . $row['description'] . "</td>   </tr>";
                                 } else{
                                     echo "<tr class='spaceUnder'> <td colspan=2> <i>Description is not large enough. Please go to the original website :^) </i></td>   </tr>";
                                 }
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
