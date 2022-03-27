<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TUGAS 7</title>
    <link rel="stylesheet" href="tugas7.css" />
  </head>
  <body>
    <div class="box" align="center">
      <h1 align="center">Sebaran Gempa Di Indonesia</h1>
      <table border="1" cellspacing="0">
        <thead>
          <tr>
            <th>Lokasi Gempa</th>
            <th>Skala</th>
            <th>Dampak</th>
          </tr>
        </thead>
        <script>
          class gempa {
            constructor(lokasi, skala) {
              this.temp = lokasi;
              this.skala = skala;
            }
            dampak(dialami) {
              if (this.skala >= 0 && this.skala <= 2) {
                dialami = 'dampak yang dialami tidak terasa';
              } else if (this.skala > 2 && this.skala <= 4) {
                dialami = 'dampak yang dialami bangunan retak-retak';
              } else if (this.skala > 4 && this.skala <= 6) {
                dialami = 'dampak yang dialami bangunan roboh';
              } else if (this.skala > 6) {
                dialami = 'dampak yang dialami bangunan rubuh dan berpotensi tsunami';
              }
              let color;
              switch (dialami) {
                case 'dampak yang dialami bangunan rubuh dan berpotensi tsunami':
                  color = 'red';
                  break;
                case 'dampak yang dialami bangunan roboh':
                  color = '#ec7484';
                  break;
                case 'dampak yang dialami bangunan retak-retak':
                  color = '#e6bfc4';
                  break;
                default:
                  break;
              }
              document.write(`<tr>
                            <td>${this.temp}</td>
                            <td align='center'>${this.skala}</td>
                            <td bgcolor="${color}">${dialami}</td></tr>`);
            }
          }
          let lautbanda = new gempa('Laut Banda', 9.8);
          let sumatra = new gempa('Sumatra', 5.4);
          let ambon = new gempa('Kota Ambon', 3.8);
          let yogyakarta = new gempa('Yogyakarta', 5.9);
          let papua = new gempa('Papua', 1.1);
          let bali = new gempa('Bali', 4.8);
          let pulauflores = new gempa('Pulau Flores', 7.5);
          let banyuwangi = new gempa('Banyuwangi', 7.2);
          let kerinci = new gempa('Kerinci', 2.0);
          let bengkulu = new gempa('Bengkulu', 0.3);
          lautbanda.dampak();
          sumatra.dampak();
          ambon.dampak();
          yogyakarta.dampak();
          papua.dampak();
          bali.dampak();
          pulauflores.dampak();
          banyuwangi.dampak();
          kerinci.dampak();
          bengkulu.dampak();
        </script>
      </table>
    </div>
  </body>
</html>

