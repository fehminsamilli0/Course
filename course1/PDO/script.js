let isci = [];
    $(document).ready(function(){
        $('select').formSelect();
      });
  
       $(document).ready(function(){
          $('.modal').modal();
        });
  
     function Sil(id) {
          swal({
        title: "Əminsinizmi?",
        text: "Silinən məlumatlar geri qaytarılmır!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Xeyr!", "Bəli!"],
      })
      .then((willDelete) => {
        if (willDelete) {
         location.href = `index.php?sil=ok&id=${id}`;
  
        } else {
          swal("İmtina Edildi!");
        }
      });
     }
  
     let status = `<?= @$_GET['status'] ?>`;
  
     if(status=="ok"){
         swal({
        title: "Əla!",
        text: "Əməliyyat uğurla yerinə yetirildi!",
        icon: "success",
        button: "Ok!",
      });
       setTimeout(Yonlendir,1000);
     }
     else if(status=="no"){
             swal({
            title: "Təəssüf!",
            text: "Əməliyyat yerinə yetirilmədi!",
            icon: "error",
            button: "Ok!",
          });
           setTimeout(Yonlendir,1000);
     }
  
     function Yonlendir() {
         let way = `<?= $_SERVER["SCRIPT_NAME"] ?>`;
         location.href = way;
     }

     function Getir(id) {
         for(let i = 1 ; i<=8;i++){
            if(i==7) continue;
             isci.push(document.getElementsByClassName("data")[id].getElementsByTagName("td")[i].textContent);
         }
         console.log(isci)
         RGetir();
     }

     function RGetir() {
         document.getElementById("radsoyad").value = isci[0];
         document.getElementById("rvezife").value = isci[1];
         document.getElementById("rmaas").value = isci[2].match(/\d+/g);
         document.getElementById("rtel").value = isci[4];
         document.getElementById("remail").value = isci[5];
         let avv = ["Subay","Evli"];
         let av = `<option value="" disabled selected>Seçim Edin</option>`;
         let cav = isci[3];
         let slc = "selected";
         for(let i = 0; i<=1;i++){
             av += `<option value="${i}">${avv[i]}</option>`;
             console.log(av);
         }
         document.getElementById("rav").innerHTML = av;
     }
  