import { db } from "./firebase.js";
import { set,getDatabase, get, child, ref, onValue } from "https://www.gstatic.com/firebasejs/9.3.0/firebase-database.js";

var data1 = [];
var count1 = 0;

export function getdata(item) {

  var data = [];
  const dbRef = ref(getDatabase());
  get(child(dbRef, `element/`)).then((snapshot) => {
    if (snapshot.exists()) {
      data = snapshot.val();
      const starCountRef = ref(db, 'count/eid');
      onValue(starCountRef, (snapshot) => {
        const c = snapshot.val();
        if(item==1){
        navbar(data,c);
        }else if(item==2){
          tableitem(data,c);
        }else if(item==3){
          getcount(c);
        }
        
      })
      // console.log(data)
    } else {
      console.log("No data available");
    }
  }).catch((error) => {
    console.error(error);
  });


}



function tableitem(data,count) {
  data1=data
  count1=parseInt(count);
  document.getElementById("Eidedit").value=count1+1;
  // console.log(data1);
  for (var i = 1; i <= count; i++) {
    document.getElementById("item").innerHTML = document.getElementById("item").innerHTML + `<tr>
    <th scope="row">`+i+`</th>
    <td>`+ data["" + i]["title"] + `</td>
    <td>
        <a href="#" onclick="triggermodal(`+i+`)" >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-pencil-square" viewBox="0 0 16 16">
        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
      </svg>
    </a>
    </td>
  </tr>`
  }
}

export function triggermodal(eid){
  
 document.getElementById("Eidedit").value=eid;
 document.getElementById("titleedit").value=data1["" + eid]["title"];
 document.getElementById("codeedit").value=data1[""+eid]["code"].replaceAll("\\n","\n");


}

export function onsubmitform(){
  console.log("in function");
 var eid=parseInt(document.getElementById("Eidedit").value)
 var title1=document.getElementById("titleedit").value
 var code1=document.getElementById("codeedit").value
 try{
 const db = getDatabase();
  set(ref(db, 'element/' + eid), {
    title : title1,
    code : code1,
  });
//  const db = getDatabase();
  set(ref(db, 'count/' ), {
    eid
  });
  console.log("submited")
}catch{
  console.log("hey error")
}
  // return false;
}
function navbar(data,count) {
  data1=data
  // console.log(data1);
  for (var i = 1; i <= count; i++) {
    document.getElementById("navitems").innerHTML = document.getElementById("navitems").innerHTML + ` <li>
  <a href="#" onclick="ItemClick(`+i+`)">`+ data["" + i]["title"] + `</a>
</li>`
  }
}



export function ItemClick(Id){
  var code = data1[""+Id]["code"].replaceAll("\\n","\n")
  window.frames['mainFrame'].contentWindow.document.getElementById("code").value =code; 
}