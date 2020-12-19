<div class="clearfix"></div>
         <footer class="site-footer">
            <div class="footer-inner bg-white">
               <div class="row">
                  <div class="col-sm-6">
                     Copyright  &copy; <?php echo date('Y')?> RAKA TEAM
                  </div>
                  
               </div>
            </div>
         </footer>
      </div>
      <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
          <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src = "//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>
  <script>
    // edits = document.getElementsByClassName('edit');
    // Array.from(edits).forEach((element) => {
    //   element.addEventListener("click", (e) => {
    //     console.log("edit ");
    //     tr = e.target.parentNode.parentNode;
    //     p_name = tr.getElementsByTagName("td")[0].innerText;
    //     DOB = tr.getElementsByTagName("td")[1].innerText;
    //     age = tr.getElementsByTagName("td")[2].innerText;
    //     address = tr.getElementsByTagName("td")[3].innerText;
    //     ph_no = tr.getElementsByTagName("td")[4].innerText;
    //     email_id = tr.getElementsByTagName("td")[5].innerText;
    //     skill = tr.getElementsByTagName("td")[6].innerText;
    //     console.log(p_name,DOB,age,address,ph_no,email_id,skill);
    //     p_nameEdit.value = p_name;
    //     DOBEdit.value = DOB;
    //     ageEdit.value = age;
    //     addressEdit.value = address;
    //     ph_noEdit.value = ph_no;
    //     email_idEdit.value = email_id;
    //     skillEdit.value = skill;
    //     snoEditEdit.value = e.target.id;
    //     consoleEdit.log(e.target.id)
    //     $('#editModal').modal('toggle');
    //   })
    // })

   //  echo "<tr>
   //          <th scope='row'>". $sno . "</th>
   //          <td>". $row['p_name'] . "</td>
   //          <td>". $row['DOB'] . "</td>
   //          <td>". $row['age'] . "</td>
   //          <td>". $row['address'] . "</td>
   //          <td>". $row['ph_no'] . "</td>
   //          <td>". $row['email_id'] . "</td>
   //          <td>". $row['skill'] . "</td>
   //          <td>". $row['username'] . "</td>
   //          <td>". $row['password'] . "</td>
           
   //        </tr>";

   //  deletes = document.getElementsByClassName('delete');
   //  Array.from(deletes).forEach((element) => {
   //    element.addEventListener("click", (e) => {
   //      console.log("edit ");
   //      sno = e.target.id.substr(1);

   //      if (confirm("Are you sure you want to delete this note!")) {
   //        console.log("yes");
   //        window.location = `/crud/index.php?delete=${sno}`;
   //        // TODO: Create a form and use post request to submit a form
   //      }
   //      else {
   //        console.log("no");
   //      }
   //    })
   //  })
  </script>
   </body>
</html>