<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jodhana</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"  />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
	*{
		    margin: 0;
		    padding: 0;
		    box-sizing: border-box;
		}
		.icon img {
			width: 100px;
			position: absolute;
			top: 10px;
			left: 10px;
		}
		.icon div {
		    line-height: 19px;
		    font-size: 20px;
		    text-align: center;
		    position: absolute;
		    left: 120px;
		    top: 40px;
		    display: inline-block;
		}
		h2{
		    font-size: 100px;
		    text-align: center;
		    color: #a57e1d;
		    background-color: #e2e0cb;
		    text-decoration: underline;
		}
		section .place{
		    color: #fff;
		}
		section .tab .artcon{
		    border: 2px solid #f47205;
		    background-color: #efeacc;
		}
		section .tab{
		    display: flex;
		}        
		section .tab .artimg img{
		    /*padding: 10px;*/
		    margin: 10px;
		}
		.artcon h4{
		    width: 100%;
		    min-height: 100px;
		    text-align: center;
		    font-size: 25px;
		    padding: 10px;
		    margin: 10px;
		    color: darkgoldenrod;
		}
		.artcon p{
		    width: 100%;
		    min-height: 100px;
		    text-align: center;
		    font-size: 25px;
		    padding: 10px;
		    margin: 10px;
		    color: #f47205;
		    /*border: 2px solid #f47205;*/
		}
		.artimg{
		    border: 2px solid gold;
		    background-color: #f3db9f;
		    /*position: absolute;*/
		}	
   </style>
</head>
<body>
<div class="icon">
		<img src="images/icon-bus.jpg">
        <div>JOHANA TRIPADVISOR</div>
	</div>
    
    <h2>Places to visit</h2>
    <section>
        <div class="next">
            <div class="place">
                <ul>
                    <li id="mehrangarh">
                        <div class="tab">
                        <div class="artimg">
                        <img src="images/mehrangarh.jpg"></div>
                        <div class="artcon"><h4>MEHRANGARH FORT</h4>
                            <p>Rising perpendicular and impregnable from a hill which is 125 metres above Jodhpur’s skyline is the Mehrangarh Fort. This historic fort is one of the most famous in India and is packed with history and legends. Mehrangarh Fort still bears the imprints of cannonball attacks courtesy the armies of Jaipur on its second gate. Chiselled and sturdy, the fort is known for its exquisite latticed windows, carved panels, intricately decorated windows and walls of Moti Mahal, Phool Mahal and Sheesh Mahal.</p></div>
                        </div>
                        </li>
                        <li id="Khejarla">
                        <div class="tab">
                        <div class="artimg"><img src="images/khejarla.jpg"></div>
                        <div class="artcon"><h4>KHEJARLA FORT</h4>
                            <p>Located 85 kilometres from the main city, the 400-year old Khejarla Fort is situated in a rural setting. The stunning red sandstone monument, now a hotel, is an example of Rajput architecture. Visitors will be mesmerised by the fort's picturesque settings, latticework friezes and intricate Jharokas.</p></div>
                        </div>
                        </li>
                        <li id="umaid">
                        <div class="tab">
                        <div class="artimg"><img src="images/umaid.jpg"></div>
                        <div class="artcon"><h4>UMAID BHAWAN PALACE</h4>
                            <p>Umaid Bhawan Palace was built by Maharaja Umaid Singh in 1929 to counter a famine which had hit the state at the time. It was also known as the Chittar Palace while being constructed thanks to the use of stones drawn from the Chittar hill. The palace was designed by HV Lanchester, a renowned British architect, and was completed in 16 years. Built with sandstone and marble, the architecture of the palace is described as a blend of lndo-Saracenic, Classical Revival and Western Art Deco styles. It is recognised as one of the largest private homes in the world and also one of the more spectacular buildings. It is the only palace built in the 20th century.</p></div>
                        </div>
                        </li>
                        <li id="ranisar">
                        <div class="tab">
                        <div class="artimg"><img src="images/ranisar.jpg"></div>
                        <div class="artcon"><h4>RANISAR PADAMSAR</h4>
                            <p>Located near the Fateh Pole in Mehrangarh, the Ranisar and Padmasar are adjacent lakes that were constructed in the year 1459. Ranisar Lake was built on orders of Queen Jasmade Hadi, Rao Jodha's wife while Padmasar Lake was ordered by Queen Padmini of Rao Ganga, daughter of Rana Sanga of Mewar.</p></div>
                        </div>
                        </li>
                        </li>
                        <li id="jaswant">
                        <div class="tab">
                        <div class="artimg"> <img src="images/jaswant.jpg"></div>
                        <div class="artcon"><h4>JASWANT THADA</h4>
                            <p>This milky white memorial built towards the end of the 19th century as a tribute to the leader Jaswant Singh is a huge tourist attraction. Jaswant Singh, who ruled Jodhpur, invested well in his state. He made attempts to bring down the level of crime, subdue dacoits, built railways and broadly worked on raising the economy of Marwar. Jaswant Thada is managed and looked after by the Mehrangarh Museum Trust (MMT) and is open to public. The Trust is operating a Museum in Jaswant Thada displaying portraits of Marwar rulers along with informative didactics – the information serves as orientation space to understand the history of Marwar through the Portraits. Its grounds serve as a serene venue for morning concerts during music festivals such as the Rajasthan International Folk Festival and the World Sacred Spirit Festival.</p></div>
                        </div>
                        </li>
                        <li id="jodgm">
                        <div class="tab">
                        <div class="artimg"> <img src="images/jodgm.jpg"></div>
                        <div class="artcon"><h4>JODHPUR GOVERNMENT MUSEUM</h4>
                            <p>The government museum, located in Umaid Garden, houses a rich collection of relics including armoury, textiles, local art and crafts, miniature paintings, portraits of rulers, manuscripts and imagess of the Jain Tirthankaras. Wildlife lovers can also visit the zoo, which is located close by.</p></div>
                        </div>
                        </li>
                         <li id="gnataghar">
                        <div class="tab">
                        <div class="artimg"> <img src="images/ghantaghar.jpg"></div>
                        <div class="artcon"><h4>GHANTA GHAR</h4>
                            <p>Ghanta Ghar, also known as the clock tower of Rajasthan, is situated in one of the busiest areas of Jodhpur, the Sadar Bazaar. It was constructed by Shri Sardar Singh Ji of Jodhpur. The Sadar Market is quite popular among tourists, who throng the streets to purchase Rajasthani textiles, clay figurines, miniature camels and elephants, marble inlay work and classic silver jewellery.</p></div>
                        </div>
                        </li>
                         <li id="mahamandir">
                        <div class="tab">
                        <div class="artimg"><img src="images/mahamandir.jpg"></div>
                        <div class="artcon"><h4>MAHAMANDIR TEMPLE</h4>
                            <p>Mahamandir, meaning great temple, is a sanctified spot where tranquillity reigns supreme. Situated on Mandore road, the temple is an architectural wonder. It is supported by 84 pillars and ornamented with detailed designs and figures depicting various postures of Yoga.</p></div>
                        </div>
                        </li>
                        <li id="sardar">
                        <div class="tab">
                        <div class="artimg"> <img src="images/sardar.jpg"></div>
                        <div class="artcon"><h4>SARDAR SAMAND LAKE AND PALACE</h4>
                            <p>Built on the banks of the Sardar Samand Lake by Maharaja Umaid Singh in 1933, the Sardar Samand Lake Palace is a spectacular hunting lodge. It remains the royal family's favourite retreat and houses a vast collection of African trophies and original watercolour paintings. The lake attracts several migratory and local birds such as the yellow-legged green pigeon, Himalayan griffon and Dalmatian pelican, making it a bird watcher's paradise.</p></div>
                        </div>
                        </li>
                         <li id="masuria">
                        <div class="tab">
                        <div class="artimg"><img src="images/masuria.jpg"></div>
                        <div class="artcon"><h4>MASURIA HILLS</h4>
                            <p>Masuria garden is one of the three most beautiful and famous gardens of Rajasthan. Located on top of the Masuria hill in the middle of Jodhpur, it is popular among devotees because of the centuries-old temple dedicated to a local deity, Baba Ramdev. There is a restaurant located here which offers a stunning panoramic view of the city.</p></div>
                        </div>
                        </li>
                         <li id="shastri">
                        <div class="tab">
                        <div class="artimg"><img src="images/shastri.jpg"></div>
                        <div class="artcon"><h4>SHASTRI CIRCLE</h4>
                            <p>Shastri Circle is a traffic roundabout in the middle of Jodhpur City. While it has a job to do during the day, it is most spectacular at night, when it comes to life with lights and fountains. This draws locals as well as tourists to the spot.</p></div>
                        </div>
                        </li>
                         <li id="mandore">
                        <div class="tab">
                        <div class="artimg"><img src="images/mandore.jpg"></div>
                        <div class="artcon"><h4>MANDORE</h4>
                            <p>Towards the north of Jodhpur is the ancient capital of Marwar, Mandore. This area is of major historical importance and you will find the dewals or cenotaphs of Jodhpur’s former rulers. Unlike the original chhatri-shaped cenotaphs that are typical patterns of Rajasthan architecture, these are built along the lines of Hindu temples.</p></div>
                        </div>
                        </li>
                         <li id="kailana">
                        <div class="tab">
                        <div class="artimg"> <img src="images/kailana.jpg"></div>
                        <div class="artcon"><h4>KAILANA LAKE</h4>
                            <p>Situated on Jaisalmer road, this small artificial lake is an ideal picnic spot. It is like a canvas with a splash of romantic colours. The beauty of the lake stays with you long after you’ve experienced it. For those who’d like to go out on to the lake, boating facilities are also available through R.T.D.C.</p></div>
                        </div>
                        </li>
                        <li id="machiya">
                        <div class="tab">
                        <div class="artimg"> <img src="images/machiya.jpg"></div>
                        <div class="artcon"><h4>MACHIYA SAFARI PARK</h4>
                            <p>This park is situated on the way to Jaisalmer, about 1 kilometre from Kailana Lake. It offers a bird watching point for visitors and is also home to several animals such as deer, desert foxes, monitor lizards, blue bulls, hare, wild cats, mongoose, monkeys, etc. The park also offers spectacular views of sunset and should not be missed.</p></div>
                        </div>
                        </li>
                        <li id="guda">
                        <div class="tab">
                        <div class="artimg"><img src="images/guda.jpg"></div>
                        <div class="artcon"><h4>GUDA VILLAGE</h4>
                            <p>Guda, a Bishnoi village, is home to a vivid range of exotic wildlife and nature. It is a habitat for thousands of migratory birds in the area. One can often catch the Demoiselle crane frolicking at the lake. Antelopes and black bucks can also be spotted by the pond. This place is a must-visit for nature lovers.</p></div>
                        </div>
                        </li>
                        <li id="balsamand">
                        <div class="tab">
                        <div class="artimg"> <img src="images/balsamand.jpg"></div>
                        <div class="artcon"><h4>BALSAMAND LAKE</h4>
                            <p>Balsamand Lake is about 5 kilometres from Jodhpur on the Jodhpur-Mandore Road. Built in 1159 AD, it was planned as a water reservoir to cater to Mandore. The Balsamand Lake Palace was built on its shore later as a summer palace. It is surrounded by lush green gardens that house groves of trees such as mango, papaya, pomegranate, guava and plum. Animals and birds like the jackal and peacock also call this place home. This lake is now a popular picnic spot with tourists and locals.</p></div>
                        </div>
                    </li>
                    
                </ul>
            </div>
        </section>
</body>
</html>