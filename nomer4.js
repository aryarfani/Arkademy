const sort_array = (input) => {
	const sortLength = input.sort((a,b) => {
		return a.length - b.length;
	});
	const sortLetter = sortLength.map(array => array.sort());
	return sortLetter;
}

let datalain = [
      ['g','h','i','j'],
		['a','c','b','e','d'],
		['g','e','f']
];

sort_array(datalain);