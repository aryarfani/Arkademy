const cetak = (jumlah) => {
	const karakter = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
	const panjang = 32;
	let random_all = '';
	let wadah = [];
	let similarity = false;
	do{	
		for(let x=0; x<jumlah; x++){
			for (let i=0; i<panjang; i++) {
				let hasil = Math.floor(Math.random() * karakter.length);
				random_all += karakter.substring(hasil,hasil+1);
			}
			wadah.push(random_all)
			random_all='';
		}
		cekWadah = () => {
			for(let y=0; y<jumlah; y++) {
				for (let z=y+1; z<jumlah; z++){
					if (wadah[y] == wadah[z]) {
						similarity = true;
					} else {
						similarity = false;
					}
				}
			}
		}
	} while(similarity)
		wadah.forEach(isi => console.log(isi))
}


