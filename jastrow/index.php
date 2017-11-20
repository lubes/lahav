    <!--    Keyboard scripts and stylesheets-->
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/jastrow/keyboard.js" charset="UTF-8"></script>
    <link rel="stylesheet" type="text/css" href="keyboard.css">

	<script src = "<?php echo get_template_directory_uri();?>/jastrow/dictionairyData.js"></script>
	<script src = "<?php echo get_template_directory_uri();?>/jastrow/fastclick.js"></script>
	<script src = "<?php echo get_template_directory_uri();?>/jastrow/tap.js"></script>

<input type="text" class="form-control keyboardInput" placeholder="Search" style="width: 75%; margin-left:50%;transform: translateX(-50%);text-align:center; direction: rtl;display:inline;margin-right: -37%; margin-bottom: 20px;" lang = 'he'>
	<br>
	<div class="btn-group btn-group-justified" role="group" style="width: 20%; margin: 0 auto; ">
		  <a href="#" type="button" class="btn btn-default" onclick="event.preventDefault(); previous();" tap = "alert();">Previous</a>
		  <a href="#" type="button" class="btn btn-default" onclick="event.preventDefault();next();">Next</a>
	</div>
	   <img src = "http://www.lahavlearning.com/wp-content/uploads/2016/08/page_Page_0001.png"   class="img-responsive center-block img-thumbnail" id="displayImg" style="display:none;" onload = "var img = this; window.setTimeout(function(){img.style.display = '';}, 100);">
	<br>
	<div class="btn-group btn-group-justified" role="group" style="width: 20%; margin: 0 auto; ">
		  <a href="#" type="button" class="btn btn-default" onclick="event.preventDefault(); previous();" tap = "alert();">Previous</a>
		  <a href="#" type="button" class="btn btn-default" onclick="event.preventDefault();next();">Next</a>

	</div>
	<script>
		//virtual keyboard javascript should be modified/changed so that onkeyup works even with the virtual keyboard.
		document.querySelector("input").onkeyup = function(){
			var page = '0000' + (search((this.value))+1);
			page = page.substring(page.length-4,page.length)
			document.querySelector('#displayImg').src = "http://www.lahavlearning.com/wp-content/uploads/2016/08/page_Page_" + page + ".png";

		}
	</script>


<script>
    //giving myself credit
    console.log('Jastrow Search created by Noah Mermelstein');
    console.log('noah@ca.rr.com');
    
    //keyboard
	//fastClick
	var attachFastClick = Origami.fastclick;
	attachFastClick(document.body);
	document.querySelector('input').addEventListener('tap', function (e) {
		this.focus();
	});
	//transliterate english => hebrew, hebrew =>english. Returns transliteration of string
	function transliterate(string) {
		var lettersDictionairy = {
			heb: [
				'ש',
				'נ',
				'ב',
				'ג',
				'ק',
				'כ',
				'ע',
				'י',
				'ן',
				'ח',
				'ל',
				'ך',
				'צ',
				'מ',
				'ם',
				'פ',
				'/',
				'ר',
				'ד',
				'א',
				'ו',
				'ה',
				'׳',
				'ס',
				'ט',
				'ז',
				'ת',
				'ץ'
			],


			eng: [
				'a',
				'b',
				'c',
				'd',
				'e',
				'f',
				'g',
				'h',
				'i',
				'j',
				'k',
				'l',
				'm',
				'n',
				'o',
				'p',
				'q',
				'r',
				's',
				't',
				'u',
				'v',
				'w',
				'x',
				'y',
				'z',
				',',
				'.'
			]
		}

		//check which language string starts as
		var startLang, endLang;
		if (/[\u0590-\u05FF]/.test(string)) {
			startLang = 'heb';
			endLang = 'eng';
		} else {
			startLang = 'eng';
			endLang = 'heb'
		}


		//transliterated string that will be returned
		var returnString = '';

		//loop over every letter in original string
		for (var i = 0; i < string.length; i++) {
			//get current letter
			var currLetter = string[i];

			//check if last letter is  tsade, fey, nun, mem, or kaf (those are the sofit letters)
			if (['ץ','ף','ן','ם','ך'].indexOf(currLetter) >= 0) currLetter = ['צ','פ','נ','מ','כ'][['ץ','ף','ן','ם','ך'].indexOf(currLetter)]



			//get index of currLetter in dictionairy
			var dictOfStartLang = lettersDictionairy[startLang];
			var letterIndexInDictionairy = dictOfStartLang.indexOf(currLetter);

			//find equivalent of currLetter in the endLang
			var dictOfEndLang = lettersDictionairy[endLang];
			var returnLetter = dictOfEndLang[letterIndexInDictionairy];

			//append letter to return string
			returnString += returnLetter;
		}
		
		//return results
		return returnString;
	}

	//search dictionairy. Returns page number where "term" will be found. Expects Hebrew Input
	function search(term){


		//copy original dictionairy
		var transliteratedDictionairy = [];
		dictionairy.forEach(function(n){
			transliteratedDictionairy.push((n));
		});

		//check if term is already contained in dictionairy
		if (transliteratedDictionairy.indexOf(term) >=0){
			return transliteratedDictionairy.indexOf(term);
		}
		//if term is in between two indexes in the dictionairy
		else {
			//add term to dictionairy
			transliteratedDictionairy.push(term);

			//sort dictionairy
			transliteratedDictionairy.sort();

			//return which page "term" will be found.
			return transliteratedDictionairy.indexOf(term) -1;
		}
	}

	function next (e){
		var img = document.querySelector('#displayImg')
		var page = img.src.substring(img.src.length-8,img.src.length-4);
		page = Number(page) + 1;
		page = '0000' + page;
		page = page.substring(page.length-4,page.length)
		img.src = "http://www.lahavlearning.com/wp-content/uploads/2016/08/page_Page_" + page + ".png";
				return false;

	}
	function previous (){
		var img = document.querySelector('#displayImg')
		var page = img.src.substring(img.src.length-8,img.src.length-4);
		page = Number(page) - 1;
		page = '0000' + page;
		page = page.substring(page.length-4,page.length)
		img.src = "http://www.lahavlearning.com/wp-content/uploads/2016/08/page_Page_" + page + ".png";
	}


</script>
