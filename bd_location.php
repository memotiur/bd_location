<?php

function bd_location($type = '', $return_type = '')
{
	$location = [
		'Barisal' => [
			'Barisal'		=>['Barisal Sadar','Agailjhara','Babuganj','Bakerganj','Banaripara','Gaurnadi','Hizla','Mehendiganj','Muladi','Wazirpur'],
			'Barguna'		=>['Barguna Sadar','Amtali','Bamna','Betagi','Patharghata','Taltoli'],
			'Bhola'			=>['Bhola Sadar','Burhanuddin','Char Fasson','Daulatkhan','Lalmohan','Manpura','Tazumuddin'],
			'Jhalokati'		=>['Jhalokati Sadar','Kathalia','Nalchity','Rajapur'],
			'Patuakhali'	=>['Patuakhali Sadar','Bauphal','Dashmina','Galachipa','Kalapara','Mirzaganj','Rangabali','Dumki'],
			'Pirojpur'		=>['Pirojpur Sadar','Bhandaria','Kawkhali','Mathbaria','Nazirpur','Nesarabad (Swarupkati)','Zianagor'],
		],
		
		'Chittagong'=> [
			'Chittagong'	=>['Anwara','Banshkhali','Boalkhali','Chandanaish','Fatikchhari','Hathazari','Lohagara','Mirsharai','Patiya','Rangunia','Raozan','Sandwip','Satkania','Sitakunda','Bandor (Chittagong Port) Thana','Chandgaon Thana','Double Mooring Thana','Kotwali Thana','Pahartali Thana','Panchlaish Thana'],
			'Bandarban'		=>['Bandarban Sadar','Ali Kadam','Lama','Naikhongchhari','Rowangchhari','Ruma','Thanchi'],
			'Brahmanbaria'	=>['Brahmanbaria Sadar','Akhaura','Bancharampur','Kasba','Nabinagar','Nasirnagar','Sarail','Ashuganj','Bijoynagar'],
			'Chandpur'		=>['Chandpur Sadar','Faridganj','Haimchar','Haziganj','Kachua','Matlab Dakshin','Matlab Uttar','Shahrasti'],
			'Comilla'		=>['Comilla Adarsha Sadar','Comilla Sadar Dakshin','Barura','Brahmanpara','Burichang','Chandina','Chauddagram','Daudkandi','Debidwar','Homna','Laksam','Muradnagar','Nangalkot','Meghna','Titas','Monohargonj'],
			"Cox's Bazar"	=>["Cox's Bazar Sadar",'Chakaria','Kutubdia','Maheshkhali','Ramu','Teknaf','Ukhia','Pekua'],
			'Feni'			=>['Feni Sadar','Chhagalnaiya','Daganbhuiyan','Parshuram','Sonagazi','Fulgazi'],
			'Khagrachhari'	=>['Dighinala','Khagrachhari','Lakshmichhari','Mahalchhari','Manikchhari','Matiranga','Panchhari','Ramgarh'],
			'Lakshmipur'	=>['Lakshmipur Sadar','Raipur','Ramganj','Ramgati','Kamalnagar'],
			'Noakhali'		=>['Noakhali Sadar','Begumganj','Chatkhil','Companiganj','Hatiya','Senbagh','Sonaimuri','Subarnachar','Kabirhat'],
			'Rangamati'		=>['Rangamati Sadar','Bagaichhari','Barkal','Kawkhali (Betbunia)','Belaichhari','Kaptai','Juraichhari','Langadu','Naniyachar','Rajasthali'],
		],
		
		'Dhaka' => [
			'Dhaka'			=>['Dhamrai','Dohar','Keraniganj','Nawabganj','Savar'],
			'Faridpur'		=>['Faridpur Sadar','Alfadanga','Bhanga','Boalmari','Charbhadrasan','Madhukhali','Nagarkanda','Sadarpur','Saltha'],
			'Gazipur'		=>['Gazipur Sadar','Kaliakair','Kaliganj','Kapasia','Sreepur'],
			'Gopalganj'		=>['Gopalganj Sadar','Kashiani','Kotalipara','Muksudpur','Tungipara'],
			'Madaripur'		=>['Madaripur Sadar','Rajoir','Kalkini','Shibchar'],
			'Manikgonj'		=>['Manikgonj Sadar','Daulatpur','Ghior','Harirampur','Saturia','Shivalaya','Singair'],
			'Munshiganj'	=>['Munshiganj Sadar','Gazaria','Lohajang','Sirajdikhan','Sreenagar','Tongibari'],
			'Kishoreganj'	=>['Kishoreganj Sadar','Astagram','Bajitpur','Bhairab','Hossainpur','Itna','Karimganj','Katiadi','Kuliarchar','Mithamain','Nikli','Pakundia','Tarail'],
			'Narayanganj'	=>['Narayanganj Sadar','Araihazar','Bandar','Rupganj','Sonargaon'],
			'Narsingdi'		=>['Narsingdi Sadar','Belabo','Monohardi','Palash','Raipura','Shibpur'],
			'Rajbari'		=>['Rajbari Sadar','Baliakandi','Goalandaghat','Pangsha','Kalukhali'],
			'Shariatpur'	=>['Shariatpur Sadar','Bhedarganj','Damudya','Gosairhat','Naria','Zanjira','Shakhipur'],
			'Tangail'		=>['Tangail Sadar','Gopalpur','Basail','Bhuapur','Delduar','Ghatail','Kalihati','Madhupur','Mirzapur','Nagarpur','Sakhipur','Dhanbari'],			
		],
		
		'Mymensingh' => [
			'Mymensingh'	=>['Mymensingh Sadar','Bhaluka','Dhobaura','Fulbaria','Gaffargaon','Gauripur','Haluaghat','Ishwarganj','Muktagachha','Nandail','Phulpur','Trishal','Tara Khanda'],
			'Jamalpur'		=>['Jamalpur Sadar','Baksiganj','Dewanganj','Islampur','Madarganj','Melandaha','Sarishabari'],
			'Netrokona'		=>['Netrokona Sadar','Atpara','Barhatta','Durgapur','Khaliajuri','Kalmakanda','Kendua','Madan','Mohanganj','Purbadhala'],
			'Sherpur'		=>['Sherpur Sadar','Jhenaigati','Nakla','Nalitabari','Sreebardi'],
		],

		'Khulna' =>[
			'Khulna'		=>['Batiaghata','Dacope','Dumuria','Dighalia','Koyra','Paikgachha','Phultala','Rupsha','Terokhada','Daulatpur Thana','Khalishpur Thana','Khan Jahan Ali Thana','Kotwali Thana','Sonadanga Thana','Harintana Thana'],
			'Bagerhat'		=>['Bagerhat Sadar','Chitalmari','Fakirhat','Kachua','Mollahat','Mongla','Morrelganj','Rampal','Sarankhola'],
			'Chuadanga'		=>['Chuadanga Sadar','Alamdanga','Damurhuda','Jibannagar'],
			'Jessore'		=>['Jessore Sadar','Abhaynagar','Bagherpara','Chaugachha','Jhikargachha','Keshabpur','Manirampur','Sharsha'],
			'Jhenaidah'		=>['Jhenaidah Sadar','Harinakunda','Kaliganj','Kotchandpur','Maheshpur','Shailkupa'],
			'Kushtia'		=>['Kushtia Sadar','Bheramara','Daulatpur','Khoksa','Kumarkhali','Mirpur','Shekhpara'],
			'Magura'		=>['Magura Sadar','Mohammadpur','Shalikha','Sreepur'],
			'Meherpur'		=>['Meherpur Sadar','Gangni','Mujibnagar'],
			'Narail'		=>['Narail Sadar','Kalia','Lohagara','Naragati Thana'],
			'Satkhira'		=>['Satkhira Sadar','Assasuni','Debhata','Kalaroa','Kaliganj','Shyamnagar','Tala'],
		],

		'Sylhet' => [
			'Sylhet'		=>['Sylhet Sadar','Balaganj','Beanibazar','Bishwanath','Companigonj','Fenchuganj','Golapganj','Gowainghat','Jaintiapur','Kanaighat','Zakiganj','South Shurma'],
			'Habiganj'		=>['Habiganj Sadar','Ajmiriganj','Bahubal','Baniyachong','Chunarughat','Lakhai','Madhabpur','Nabiganj'],
			'Moulvibazar'	=>['Moulvibazar Sadar','Barlekha','Kamalganj','Kulaura','Rajnagar','Sreemangal','Juri'],
			'Sunamganj'		=>['Sunamganj Sadar','Bishwamvarpur','Chhatak','Derai','Dharampasha','Dowarabazar','Jagannathpur','Jamalganj','Sullah','Tahirpur','South Sunamganj'],
		],

		'Rajshahi' => [
			'Rajshahi'		=>['Bagha','Bagmara','Charghat','Durgapur','Godagari','Mohanpur','Paba','Puthia','Tanore','Boalia Thana','Matihar Thana','Rajpara Thana','Shah Mokdum Thana',],
			'Bogra'			=>['Adamdighi','Bogra Sadar','Dhunat','Dhupchanchia','Gabtali','Kahaloo','Nandigram','Sariakandi','Shajahanpur','Sherpur','Shibganj','Sonatola'],
			'Joypurhat'		=>['Akkelpur','Joypurhat Sadar','Kalai','Khetlal','Panchbibi'],
			'Naogaon'		=>['Naogaon Sadar','Atrai','Badalgachhi','Manda','Dhamoirhat','Mohadevpur','Niamatpur','Patnitala','Porsha','Raninagar','Sapahar'],
			'Natore'		=>['Natore Sadar','Bagatipara','Baraigram','Gurudaspur','Lalpur','Singra','Naldanga'],
			'Chapainawabganj'=>['Nawabganj Sadar','Bholahat','Gomastapur','Nachole','Shibganj'],
			'Pabna'			=>['Pabna Sadar','Ataikula','Atgharia','Bera','Bhangura','Chatmohar','Faridpur','Ishwardi','Santhia','Sujanagar'],
			'Sirajganj'		=>['Sirajganj Sadar','Belkuchi','Chauhali','Kamarkhanda','Kazipur','Raiganj','Shahjadpur','Tarash','Ullahpara'],
		],

		'Rangpur' => [
			'Rangpur'		=>['Rangpur Sadar','Badarganj','Gangachhara','Kaunia','Mithapukur','Pirgachha','Pirganj','Taraganj'],
			'Dinajpur'		=>['Dinajpur Sadar','Birampur','Birganj','Biral','Bochaganj','Chirirbandar','Phulbari','Ghoraghat','Hakimpur','Kaharole','Khansama','Nawabganj','Parbatipur',],
			'Gaibandha'		=>['Gaibandha Sadar','Phulchhari','Gobindaganj','Palashbari','Sadullapur','Sughatta','Sundarganj'],
			'Kurigram'		=>['Kurigram Sadar','Bhurungamari','Char Rajibpur','Chilmari','Phulbari','Nageshwari','Rajarhat','Raomari','Ulipur'],
			'Lalmonirhat'	=>['Lalmonirhat Sadar','Aditmari','Hatibandha','Kaliganj','Patgram'],
			'Nilphamari'	=>['Nilphamari Sadar','Dimla','Domar','Jaldhaka','Kishoreganj','Saidpur'],
			'Panchagarh'	=>['Panchagarh Sadar','Atwari','Boda','Debiganj','Tetulia'],
			'Thakurgaon'	=>['Thakurgaon Sadar','Baliadangi','Haripur','Pirganj','Ranisankail']
		]
	];

	
	if($type == 'division') # return all division
	{ 
		$division = array();
		foreach($location as $key => $div)
		{
			$division[] = $key;
		}
		asort($division);
		return $division;
	}
	elseif($type == 'district' && isset($location[$return_type])) # return division wise district
	{ 
		$district = array();
		foreach($location[$return_type] as $key => $div)
		{
			$district[] = $key;
		}
		asort($district);
		return $district;
	}
	elseif($type == 'district' && $return_type == 'all') # return all discrict
	{ 
		$district = array();
		foreach($location as $key => $val)
		{
			foreach($val as $dist_key => $sub_dist)
			{
				$district[] = $dist_key;
			}
		}
		asort($district);
		return $district;
	}
	elseif($type == 'sub_district' || $type == 'upazila') # return discrict wise sub-district/upzilla
	{
		foreach($location as $key => $val)
		{
			foreach($val as $dist_key => $sub_dist)
			{
				if($dist_key == $return_type)
				{
					asort($sub_dist);
					return $sub_dist;
				}
			}
		}
	}	
	else{
		return $location;
	}
	// return $location;
}


// echo '<h3>Division</h3><pre>';
// print_r(bd_location('upazila', 'Rangpur'));
// echo '</pre>';
