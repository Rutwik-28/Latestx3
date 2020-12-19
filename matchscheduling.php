<?php
require('top.inc.php');
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Team Manage</strong></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							

								<div class="card-body--">
                                <h1 align="center">Match Schedule
                                    
                                </h1>
                                        <center>
                                            <table border="4" align="left">
                                                <thead>
                                                    <tr>
                                                        <th>Team-1 Name </th>
                                                        <td><input type="text" name="t1name" id="t1name"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Team-2 Name </th>
                                                        <td><input type="text" name="t2name" id="t2name"></td>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr align="centre">
                                                        <th>
                                                            <div class="row">
                                                                <!-- <div class="col-25"> -->
                                                                    <!-- <label for="match date " align="centre"> Date:</label> -->
                                                                    <th>date</th>

                                                                </div>
                                                        </th>
                                                        <td>
                                                            <div class="col-75">
                                                                <input type="date" id="match date" name="match date">


                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr align="centre">
                                                        <th >
                                                            <div class="row">
                                                                <div class="col-25">
                                                                <th> time:</th>
                                                                

                                                                </div>
                                                        </th>
                                                        <td>
                                                            <div class="col-75">
                                                                <input type="time" id="appt" name="appt">


                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr id="btn">

                                                        <td colspan="2"><input type="button" name="button" id="btn" value="Add" class="button"
                                                                onclick="AddRow()"></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                            <table border="4" id="show" align="right">
                                                <thead>
                                                    <tr>
                                                        <th>Team-1 Name</th>
                                                        <th>Team-2 Name</th>
                                                        <th>Match Date</th>
                                                        <th>Match Time</th>

                                                    </tr>
                                                </thead>
                                            </table>
                                        </center>

								</div>
							</div>
						</form>
								
						
                    </div>
                  </div>
               </div>
            </div>
         </div>

         <script >
    	var list1 = [];
    	var list2 = [];
    	var list3 = [];
    	var list4 = [];
   

        var n = 1;
        var x = 0;

        function AddRow(){
        	var AddRown = document.getElementById('show');
        	var NewRow = AddRown.insertRow(n);

        	list1[x] = document.getElementById('t1name').value;
        	list2[x] = document.getElementById('t2name').value;
        	list3[x] = document.getElementById('match date').value;
        	list4[x] = document.getElementById('appt').value;

        	var cel1 = NewRow.insertCell(0);
        	var cel2 = NewRow.insertCell(1);
        	var cel3 = NewRow.insertCell(2);
        	var cel4 = NewRow.insertCell(3);
        

        	cel1.innerHTML = list1[x];
        	cel2.innerHTML = list2[x];
        	cel3.innerHTML = list3[x];
        	cel4.innerHTML = list4[x];
        	

        	n++;
        	x++;



        }



    </script>
         
<?php
require('footer.inc.php');
?>