function angka1(){
  let frm = document.getElementById('formulir');
  frm.a1.value = '';   
 }
 
 function angka2(){
     let frm = document.getElementById('formulir');
     frm.a2.value = '';
 }
 function kosongAll(){
     let frm = document.getElementById('formulir');
     frm.a1.value = '';   
     frm.a2.value = '';
     frm.hasil.value = '';
 }

 function hitung(aritmatika){
     let frm = document.getElementById('formulir');
      a1 = frm.a1.value;
      a2 = frm.a2.value;

      // operasi
      let hsl;
      if(aritmatika == 'tambah') hsl = parseInt(a1) + parseInt(a2);
      else if(aritmatika == 'kurang') hsl = parseInt(a1) - parseInt(a2);
      else if(aritmatika == 'bagi') hsl = parseInt(a1) / parseInt(a2);
      else if(aritmatika == 'kali') hsl = parseInt(a1) * parseInt(a2);
      else if(aritmatika == 'pangkat') hsl = Math.pow(parseInt(a1) , parseInt(a2));
      else hsl = '';

  if(isNaN(a1) || a1 == ''){
      alert("A1 harus diisi berupa number atau tidak boleh kosong");
  }else if(isNaN(a2) || a2 == ''){
      alert("A2 harus diisi berupa number atau tidak boleh kosong");
  }
  else{
      frm.hasil.value = hsl;  
  }
 }