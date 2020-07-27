function AddRow()
        {
            var AddRown= document.getElementbyId("show");
            var NewRow = AddRown.insertRow
        
            list1[x] = document.getElementById("id1").value;
        
            list2[x]  = document.getElementById('pswd').value;
           
            list3[x]  = document.getElementById('nme').value;
        
            list4[x]  = document.getElementById('address').value;
          
            list5[x]  = document.getElementById('cntry').value;
            
            list6[x] = document.getElementById('zcode').value;
            
            list7[x]  = document.getElementById('emailId').value;
        
            list8[x] = document.getElementById('gen').value;
            
            list9[x]  = document.getElementById('lang').value;
        
            list10[x]  = document.getElementById('abt').value;
            
             var cell1=NewRow.insertcell(0);
             var cell2 = NewRow.insertCell(1);
             var cell3 = NewRow.insertCell(2);
             var cell4 = NewRow.insertCell(3);
             var cell5 = NewRow.insertCell(4);
             var cell6 = NewRow.insertCell(5);
             var cell7 = NewRow.insertCell(6);
             var cell8 = NewRow.insertCell(7);
             var cell9 = NewRow.insertCell(8);
             var cell10 = NewRow.insertCell(9);
             
             cell1.innerHTML = list1[x];
             cell2.innerHTML = list2[x];
             cell3.innerHTML = list3[x];
             cell4.innerHTML = list4[x];
             cell5.innerHTML = list5[x];
             cell6.innerHTML = list6[x];
             cell7.innerHTML = list7[x];
             cell8.innerHTML = list8[x];
             cell9.innerHTML = list9[x];
             cell10.innerHTML = list10[x];
        
             n++;
             x++;
        
            
        }
        </script>
        