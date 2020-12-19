<!-- <tbody>
								<?php 
									// $sql = "SELECT * FROM `player_info`";
									// $result = mysqli_query($conn, $sql);
									// $sno = 0;
									// while($row = mysqli_fetch_assoc($result))
									// {
									// $sno = $sno + 1;
									// echo "<tr>
									// <th scope='row'>". $sno . "</th>
									// <td>". $row['p_name'] . "</td>
									// <td>". $row['DOB'] . "</td>
									// <td>". $row['age'] . "</td>
									// <td>". $row['address'] . "</td>
									// <td>". $row['ph_no'] . "</td>
									// <td>". $row['email_id'] . "</td>
									// <td>". $row['skill'] . "</td>
									// <td>". $row['username'] . "</td>
									// <td>". $row['password'] . "</td>
								
									// <td> <button class='edit btn btn-sm btn-primary' >.Edit</button> 
									// <button class='delete btn btn-sm btn-primary' >Delete</button>  </td>
									// </tr>";
									// } 
							
								?>

                            </table> -->

                            <div class="card-body--">
						<div class="table-stats order-table ov-h">
							<table class="table" id="myTable">
								<thead>
									<tr>
										<th scope="col">SR NO </th>
										<th scope="col">NAME</th>
										<th scope="col">DOB</th>
										<th scope="col">AGE</th>
										<th scope="col">ADDRESS</th>
										<th scope="col">NUMBER</th>
										<th scope="col">EMAIL</th>
										<th scope="col">SKILL</th>
										<th scope="col">USERNAME</th>
										<th scope="col">PASSWORD</th>
										<th scope="col">ACTION</th>
									</tr>
								</thead>
								<tbody>

									<?php 
											// $sql = "SELECT * FROM `player_info`";
											// $result = mysqli_query($conn, $sql);
											// $sno = 0;
											// while($row = mysqli_fetch_assoc($result))
											// {
											// $sno = $sno + 1;
											// echo "<tr>
											// <th scope='row'>". $sno . "</th>
											// <td>". $row['p_name'] . "</td>
											// <td>". $row['DOB'] . "</td>
											// <td>". $row['age'] . "</td>
											// <td>". $row['address'] . "</td>
											// <td>". $row['ph_no'] . "</td>
											// <td>". $row['email_id'] . "</td>
											// <td>". $row['skill'] . "</td>
											// <td>". $row['username'] . "</td>
											// <td>". $row['password'] . "</td>
											
										
											// <td> <button class='edit btn btn-sm btn-primary' >".$row['p_id']."Edit </button> 
											// <button class='delete btn btn-sm btn-primary' >".$row['p_id']."Delete</button>  </td>
											// </tr>";
											// } 

											
									$sql = "SELECT * FROM `player_info`";
									$result = mysqli_query($conn, $sql);
									
									while($row=mysqli_fetch_assoc($result)){?>
									<tr>

										<td><?php echo $row['p_id']?></td>
										<td><?php echo $row['p_name']?></td>
										<td><?php echo $row['DOB']?></td>
										<td><?php echo $row['age']?></td>
										<td><?php echo $row['address']?></td>
										<td><?php echo $row['ph_no']?></td>
										<td><?php echo $row['email_id']?></td>
										<td><?php echo $row['skill']?></td>
										<td><?php echo $row['username']?></td>
										<td><?php echo $row['password']?></td>

										<td>
											<?php
										echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['p_id']."'>Delete</a></span>";
										?>
										</td>

									</tr>
									<?php } ?>

									?>


								</tbody>


							</table>
						</div>
					</div>                            
                            




