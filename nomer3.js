	const cetak_gambar = (batas) => {
		if(batas%2==0) {
			document.write('Masukkan Bilangan Ganjil')
		}else{
			let tengah = Math.round(batas/2);
			for (let i = 1; i <= tengah-1; i++){
				document.write('* ');
				for(let j=1; j <= batas-2; j++){
					document.write('= ');
				}
				document.write('* ');
				document.write('<br/>')
			}
			for(let i=1; i<=batas;i++){
				document.write('* ')
			}
				document.write('<br/>')

			for (let i = 1; i <= tengah-1; i++){
				document.write('* ');
				for(let j=1; j <= batas-2; j++){
					document.write('= ');
				}
				document.write('* ');
				document.write('<br/>')
			}
		}
	}

cetak_gambar(5);
