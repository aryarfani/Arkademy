const getBiodata = () => {
	const biodata = {
		name: 'A. Rifqi Yarzuq Arfani',
		address: 'Lirboyo Kediri',
		hobbies: ['watching movies', 'learn new things'],
		is_married: false,
		school: {'highShool': 'SMK Telekomunikasi DU Jombang', 'university': 'UNP PGRI Kediri'},
		skills: [{1: 'Fluent in English'}, {2: 'Able to learn fast'}]
	};

	return JSON.stringify(biodata);
}

getBiodata();