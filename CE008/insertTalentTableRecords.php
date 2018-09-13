<?php
$newAuth = array(
    array('Steve', 'McQueen', 'Actor', 'http://ia.media-imdb.com/images/M/MV5BMTQ3Mjk2MTU1MV5BMl5BanBnXkFtZTcwMTA5MTkzNA@@._V1_UY317_CR23,0,214,317_AL_.jpg', 'Terence Steven "Steve" McQueen was an American actor. Called "The King of Cool", his "anti-hero" persona, developed at the height of the counterculture of the 1960s, made him a top box-office draw of the 1960s and 1970s. Wikipedia'),
	array('Roy', 'Scheider', 'Actor', 'http://a3.files.biography.com/image/upload/c_fit,cs_srgb,dpr_1.0,h_1200,q_80,w_1200/MTIwNjA4NjMzNjMyMDk3ODA0.jpg', 'Roy Richard Scheider was an American actor and amateur boxer. He gained fame for his leading and supporting roles in several iconic films from the 1970s, playing Police Chief Martin C. Brody in Jaws ... Wikipedia'),
	array('Humphrey', 'Bogart', 'Actor', 'http://a4.files.biography.com/image/upload/c_fit,cs_srgb,dpr_1.0,h_1200,q_80,w_1200/MTE4MDAzNDEwNDU3MjMyOTEw.jpg', 'Humphrey DeForest Bogart was an American screen actor whose performances in iconic 1940s films noir such as The Maltese Falcon, Casablanca, and The Big Sleep earned him status as a cultural icon. Bogart ... Wikipedia'),
	array('Gene', 'Hackman', 'Actor', 'http://biografieonline.it/img/bio/g/Gene_Hackman.jpg', 'Eugene Allen "Gene" Hackman[1][2][3] (born January 30, 1930) is an American retired actor and novelist. In a career spanning five decades, Hackman has been nominated for five Academy Awards, winning two for best actor in The French Connection and best supporting actor in Unforgiven.'),
	array('Clint', 'Eastwood', 'Actor', 'https://upload.wikimedia.org/wikipedia/commons/6/68/ClintEastwoodSept10TIFF.jpg', 'Clinton "Clint" Eastwood Jr. is an American actor, film director, producer, musician, and political figure. Wikipedia'),
	array('Clint', 'Eastwood', 'Director', 'https://upload.wikimedia.org/wikipedia/commons/6/68/ClintEastwoodSept10TIFF.jpg', 'Clinton "Clint" Eastwood Jr. is an American actor, film director, producer, musician, and political figure. Wikipedia'),
	array('William', 'Friedkin', 'Director', 'https://i.ytimg.com/vi/-Hih8yi5bHg/maxresdefault.jpg', 'William Friedkin is an American film director, producer and screenwriter best known for directing The French Connection in 1971 and The Exorcist in 1973; for the former, he won the Academy Award for Best Director. Wikipedia'),
	array('Michael', 'Curtiz', 'Director', 'https://upload.wikimedia.org/wikipedia/en/2/22/MichaelCurtiz.jpg', 'Michael Curtiz was a Hungarian American film director. He had early credits as Mihály Kertész and Michael Kertész. Wikipedia'),
	array('Peter', 'Yates', 'Director', 'http://www.nndb.com/people/333/000078099/peteryates01.jpg', 'Peter James Yates was an English film director and producer. He was born in Aldershot, Hampshire. Wikipedia'),
	array('Steven', 'Spielberg', 'Director', 'http://a5.files.biography.com/image/upload/c_fill,cs_srgb,dpr_1.0,g_face,h_300,q_80,w_300/MTE5NTU2MzE2Mzc0MDA5MzU1.jpg', 'Steven Allan Spielberg KBE OMRI is an American director, producer and screenwriter. Spielberg is considered one of the founding pioneers of the New Hollywood era, as well as being viewed as one of the ... Wikipedia')
);
//print_r($newAuth);
echo "<hr><br><h2>Records inserted</h2><hr>";
foreach ($newAuth as $insertArray) {

    //$query = "INSERT INTO `Library`.`Talent` (`First`, `Last`, `idTalent`, `Bio`, `Image`) "
    $query = "INSERT INTO `Library`.`Talent` VALUES ('$insertArray[0]', '$insertArray[1]', '$insertArray[2]', '$insertArray[3]', '$insertArray[4]');";
    include 'queryResult.php';

    echo "$insertArray[0] $insertArray[1] was added<br>";
}
?>
