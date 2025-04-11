<?php 
session_start();

if(isset($_SESSION['auth'])){
    header('location:../../admin/dashboard/index.php');
}
include ('../includes/header.php');

include ('../includes/sidebar.php');

include ('../includes/topbar.php'); ?>

<div class="home-content">
<style>
    .content #origmap{
    background: #ffffff;
    margin: 10px 27px;
    padding:48px;
    box-shadow: 2px 2px 4px rgba(0,0,0,0.125),
    -2px -2px 4px rgba(0,0,0,0.125);
    display:block;
}

.warpper{
    display:flex;
    flex-direction: column;
    align-items: center;
}
.tab{
    cursor: pointer;
    padding:10px 18px;
    margin:0px 1px;
    background:#000;
    display:inline-block;
    color:#fff;
    border-radius:3px 3px 0px 0px;
    box-shadow: 0 0.5rem 0.8rem #00000080;
    width: 20vh;
}
.panels{
    background:#fffffff6;
    box-shadow: 0 2rem 2rem #00000080;
    border-radius:3px;
}
  
.panels .panel-content{
    /*margin: 50px;*/
    text-align: justify;
    margin: 80px 100px 80px 100px;
}

@media only screen and (max-width: 1000px) {
  .panels .panel-content {
    margin: 20px;
  }
}

.panels .panel-content h2{
    text-align: center;
}

.panels .panel-content p{
    margin: 10px;
    text-align: justify;
    text-indent: 5rem;
    line-height: 1.8
}

.panels .panel-content ul{
    margin-left: 0;
    padding: 0;
    /*text-align: center;*/
}
.panels .panel-content ul li{
  margin: 0 10px;
  padding: 5px;
}
.panels img{
    width: 100%;
    height: auto;
    max-height: 500px !important;
    justify-self: center;
}
.panel{
    display:none;
    animation: fadein .8s;
}
  @keyframes fadein {
      from {
          opacity:0;
      }
      to {
          opacity:1;
      }
}
.panel-title{
    font-size:1.5em;
    font-weight:bold
}
.radio{
    display:none;
}
  #one:checked ~ .panels #one-panel,
  #two:checked ~ .panels #two-panel,
  #three:checked ~ .panels #three-panel,
  #four:checked ~ .panels #four-panel,
  #five:checked ~ .panels #five-panel
  {
    display:block
  }
  #one:checked ~ .tabs #one-tab,
  #two:checked ~ .tabs #two-tab,
  #three:checked ~ .tabs #three-tab,
  #four:checked ~ .tabs #four-tab,
  #five:checked ~ .tabs #five-tab
  {
    background:#fffffff6;
    color:#000;
    border-top: 3px solid #000;
}
</style>
<div class="content_notmap">
    <div class="map">
    <div class="main-content">
      <div id="mapwrap">
        <div class="warpper">
          <input class="radio" id="one" name="group" type="radio" checked>
          <input class="radio" id="two" name="group" type="radio">
          <input class="radio" id="three" name="group" type="radio">
          <input class="radio" id="four" name="group" type="radio">
          <input class="radio" id="five" name="group" type="radio">
          <div class="tabs">
          <label class="tab" id="one-tab" for="one">Importance</label>
          <label class="tab" id="two-tab" for="two">Floods</label>
          <label class="tab" id="three-tab" for="three">Landslides</label>
          <label class="tab" id="four-tab" for="four">Soil Erosion</label>
          <label class="tab" id="five-tab" for="five">Tsunami</label>
        </div>

        <!-- ----------------IMPORTANCE--------------------- -->
        <div class="panels">
        <div class="panel" id="one-panel">
            <div class="panel-content">
            <h2>Why Disaster Preparedness is Important?</h2><br>
            <p>Natural disasters are destined to occur occasionally. While we can't totally prevent them, we can contribute to mitigating their effects. The simplest method to limit the harm when something awful happens is to be prepared for emergencies. The importance of being ready for an unpredictable disaster is now more evident than ever. It is anticipated that landslides, floods, tsunamis, and soil erosion would all grow more common and severe, posing a yearly threat to hundreds of millions of people.</p>
            <p>Being prepared for disasters can save countless lives, hastens recovery times, and reduces costs. Additionally, it can lessen the losses and feeling of fear that come with calamities. The preparation of a community for disasters has a significant impact on an individual's safety during emergencies. No matter how prepared they are for every conceivable catastrophe, all of their planning could be useless if their community is unable to cope with such occurrences.</p>  

            <p>This is why having a localized plan for disaster risk reduction and management is crucial. It ensures that businesses, homes, and individuals may collaborate to make their communities more resilient in the case of disaster by placing the burden of emergency preparedness on the community as a whole. The plan is crucial, particularly for nations like the Philippines that are extremely susceptible to natural calamities. The Philippines frequently experiences earthquakes, volcanic eruptions, and typhoons due to its location inside the Pacific Ring of Fire and typhoon belt, respectively.</p>  
            
            <p>Flooding is one of the most frequent occurrences in the Philippines, which emphasizes the significance of efficient floodwater management. Local government organizations are achieving this in a variety of ways. There are many different types of efforts, from structural ones like building sizable subsurface drainage systems, floodways, pumping stations, flood warning systems, and urban greening to non-structural ones like reducing plastic trash, which is a major cause of urban flooding.</p><br>
            <!--<img src="../images/importance.webp" style="width: 100%; height: 500px; ">-->
        </div>
        </div>
        <!-- ----------------FLOODS--------------------- -->
        <div class="panel" id="two-panel">
        <div class="panel-content">
          
            <h2>Flood</h2><br>
            <img src="../images/Floods(2).png"><br><br>
            <p>Floods are the most frequent type of natural disaster and occur when an overflow of water submerges land that is usually dry. Floods are often caused by heavy rainfall, rapid snowmelt or a storm surge from a tropical cyclone or tsunami in coastal areas. Floods can cause widespread devastation, resulting in loss of life and damages to personal property and critical public health infrastructure. Between 1998-2017, floods affected more than 2 billion people worldwide. People who live in floodplains or non-resistant buildings, or lack warning systems and awareness of flooding hazard, are most vulnerable to floods.
            </p><br>

            <h2>Before a Flood</h2> <br>
            <!--<img src="../images/before_floods.webp" style="width: 100%; height: 500px; "><br><br>-->
            <!--<p>To prepare for a flood, you should:</p><br>-->
            <ul style="text-align: left;">To prepare for a flood, you should:<br><br>
                <li>Build an emergency kit and make a family communications plan.</li>
                <li>Avoid building in a floodplain unless you elevate and reinforce your home.</li>
                <li>Elevate the furnace, water heater and electric panel in your home if you live in an area that has a high flood risk.
                </li>
                <li>Consider installing "check valves" to prevent flood water from backing up into the drains of your home.</li>
                <li>If feasible, construct barriers to stop flood water from entering the building and seal walls in basements with waterproofing compounds.
                </li>
                
            </ul><br>

            <h2>During a Flood</h2> <br>
            <!--<img src="../images/during_floods.webp" style="width: 100%; height: 500px; " ><br><br>-->
            <!--<p>If a flood is likely in your area, you should:</p><br>-->
            <ul style="text-align: left;">If a flood is likely in your area, you should:<br><br>
                <li>Listen to the radio or television for information.
                </li>
                <li>Be aware that flash flooding can occur. If there is any possibility of a flash flood, move immediately to higher ground. Do not wait for instructions to move.</li>
                <li>Be aware of streams, drainage channels, canyons and other areas known to flood suddenly. Flash floods can occur in these areas with or without typical warnings such as rain clouds or heavy rain.
                </li>
            </ul><br>
            <!--<p>If you must prepare to evacuate, you should do the following:-->
            <!--</p>-->
            <ul style="text-align: left;">If you must prepare to evacuate, you should do the following:<br><br>
                <li>Secure your home. If you have time, bring in outdoor furniture. Move essential items to an upper floor.
                </li>
                <li>Turn off utilities at the main switches or valves if instructed to do so. Disconnect electrical appliances. Do not touch electrical equipment if you are wet or standing in water.
                </li>
                
            </ul><br>

            <h2>After a Flood</h2> <br>
            <!--<img src="../images/after_floods.webp" style="width: 100%; height: 500px; " ><br><br>-->
            <!--<p>Your home has been flooded. Although floodwaters may be down in some areas, many dangers still exist. Here are some things to remember in the days ahead:-->
            <!--</p><br>-->
            <ul style="text-align: left;">Your home has been flooded. Although floodwaters may be down in some areas, many dangers still exist. Here are some things to remember in the days ahead:<br><br>
                <li>Avoid moving water.</li>
                <li>Stay away from damaged areas unless your assistance has been specifically requested by police, fire, or relief organizations.</li>
                <li>Emergency workers will be assisting people in flooded areas. You can help them by staying off the roads and out of the way.</li>
                <li>Play it safe. Additional flooding or flash floods can occur. Listen for local warnings and information. If your car stalls in rapidly rising waters, get out immediately and climb to higher ground.
                </li>
                <li>Return home only when authorities indicate it is safe.
                </li>
                <li>Roads may still be closed because they have been damaged or are covered by water. Barricades have been placed for your protection. If you come upon a barricade or a flooded road, go another way.
                </li>
                <li>If you must walk or drive in areas that have been flooded.
                </li>
                <li>Stay on firm ground. Moving water only 6 inches deep can sweep you off your feet. Standing water may be electrically charged from underground or downed power lines.
                </li>
                <li>Flooding may have caused familiar places to change. Floodwaters often erode roads and walkways. Flood debris may hide animals and broken bottles, and it's also slippery. Avoid walking or driving through it.
                </li>
                <li>Be aware of areas where flood waters have receded. Roads may have weakened and could collapse under the weight of a car.
                </li>
                <li>Stay out of any building if it is surrounded by floodwaters.
                </li>
                <li>Use extreme caution when entering buildings; there may be hidden damage, particularly in foundations.
                </li>
            </ul><br>
            <p>Staying Healthy</p><br>
            <!--<p>A flood can cause physical hazards and emotional stress. You need to look after yourself and your family as you focus on cleanup and repair.-->
            <!--</p><br>-->
            <ul style="text-align: left;">A flood can cause physical hazards and emotional stress. You need to look after yourself and your family as you focus on cleanup and repair.<br><br>
                <li>Avoid floodwaters; water may be contaminated by oil, gasoline or raw sewage.</li>
                <li>Service damaged septic tanks, cesspools, pits and leaching systems as soon as possible. Damaged sewer systems are serious health hazards.</li>
                <li>Listen for news reports to learn whether the community's water supply is safe to drink.
                </li>
                <li>Clean and disinfect everything that got wet. Mudleft from floodwaters can contain sewage and chemicals.
                </li>
                <li>Rest often and eat well.
                </li>
                <li>Keep a manageable schedule. Make a list and do jobs one at a time.</li>
                <li>Discuss your concerns with others and seek help. Contact Red Cross for information on emotional support available in your area.
                </li>
            </ul><br>
            <!--<p>Cleaning up & Repairing Your Home</p><br>-->
            <ul style="text-align: left;">Cleaning up & Repairing Your Home<br><br>
                <li>Turn off the electricity at the main breaker or fuse box, even if the power is off in your community. That way, you can decide when your home is dry enough to turn it back on.
                </li>
                <li>Get a copy of the book Repairing Your Flooded Home which is available free from the American Red Cross or your state or local emergency manager. It will tell you:
                </li>
                <li>How to enter your home safely.</li>
                <li>How to protect your home and belongings from further damage.
                </li>
                <li>How to record damage to support insurance claims and requests for assistance.</li>
                <li>How to check for gas or water leaks and how to have service restored.</li>
                <li>How to clean up appliances, furniture, floors and other belongings.
                </li>
                <li>The Red Cross can provide you with a cleanup kit: mop, broom, bucket, and cleaning supplies.
                </li>
                <li>Contact your insurance agent to discuss claims.
                </li>
                <li>Listen to your radio for information on assistance that may be provided by the state or federal government or other organizations.
                </li>
                <li>If you hire cleanup or repair contractors, check references and be sure they are qualified to do the job. Be wary of people who drive through neighborhoods offering help in cleaning up or repairing your home.
                </li>                    
                
            </ul><br>

        </div>
        </div>
        <!-- ----------------LANDSLIDE--------------------- -->
        <div class="panel" id="three-panel">
        <div class="panel-content">
                    <h2>Landslide</h2><br>
                    <img src="../images/Landslide(2).png"><br><br>
                    <p>Landslides are defined as a down slope movement of rocks, debris and mud. Initiation could be caused by many factors such as rainfall, earthquakes, change in ground water and human-related activities (Mccoll 2015). Although it plays a big role in the evolution of landforms, it causes property destruction, injuries, water supply pollution and much more. Landslide assessments are thus an important step in identifying the potential risks (Pardeshi et al 2013). First of all, it is important that we understand causes of landslides. By understanding the causes, we can use the correct measures in preventing and minimizing the damages. Next, it is also important to acknowledge the different types of landslides. Landslides occur in many different ways, knowing the types will help determine examination methods and assessments that are best suited for each situation. In this paper, we aim to use the map tools to help identify previous landslides and the geography of the composition of land around it. By doing so, we may be able to predict and prevent similar incidents in the future. Furthermore, regulations and enforcements can be made to avoid future human activity near the area.
                    </p><br>

                    <h2>Before a Landslide</h2> <br>
                    <!--<img src="../images/before_landslide.webp" style="width: 100%; height: 500px; " ><br><br>-->
                    <!--<p>Landslides can happen anytime in all regions of Philippines. The best way to protect yourself and your family in case of a landslide is to follow these steps:-->
                    <!--</p><br>-->
                    <ul style="text-align: left;">Landslides can happen anytime in all regions of Philippines. The best way to protect yourself and your family in case of a landslide is to follow these steps:<br><br>
                        <li>The key to staying safe is to prepare and to have an emergency plan in place.</li>
                        <li>Find out if you live in an area where landslides could potentially happen. Landslides may also be referred to as mudslides, debris flows, mudflows or debris avalanches.</li>
                        <li>Listen to local news and weather reports for any potential landslide watches and warnings in your area.
                        </li>
                        <li>Talk with your family and neighbors about what you would do during a landslide. Identify a safe place to gather.</li>
                        <li>Have practice drills with your family, so you know what to do and are prepared.</li>
                        <li>Become familiar with the land around where you live and work so that you understand your risk in different situations. </li>
                        <li>Avoid actions that could increase instability. For example, don’t undercut a steep bank; don’t build near the top or base of steep slopes; don’t place fill on steep slopes; and don’t drain swimming pools or otherwise increase water flow down steep slopes. 
                        </li>
                        <li>Learn how to recognize the signs of potential imminent landslides. This could include slope cracks, slope bulges, an unusual seepage of water on the slope, sudden changes in stream flow and small rocks falling.</li>
                        <li>Watch the patterns of storm water drainage on slopes near your home, especially where runoff water converges. 
                        </li>
                        <li>Know who to notify if you see these signs. Have municipal emergency contact numbers on hand.
                        </li>
                        <li>Make a personalized emergency kit. Families should be prepared to be self-sustaining for at least three days.
                        </li>
                        <li>Have your emergency kit ready</li>
                        <li>it should include practical items such as drinking water, food, cash, and a portable radio. However, they should also include items that are unique to your own families’ needs. This could include baby items, medical prescriptions, pet food, etc.</li>
                        <li>If you have already dipped into your emergency kit and food supply while staying at home, consider safely getting the supplies to replenish it following your local public health authorities’ guidelines for leaving your residence.</li>
                        <li>During the COVID-19 pandemic also add hygiene items such as hand sanitizer and non-medical masks to your kit to keep your family safe during an evacuation.
                        </li>
                        
                    </ul><br>
		    
 		            <h2>During a Landslide</h2> <br>
                    <!--<img src="../images/during_landslide.webp" style="width: 100%; height: 500px; " ><br><br>-->
                    <!--<p>Landslides can happen anytime in all regions of Philippines. The best way to protect yourself and your family in case of a landslide is to follow these steps:-->
                    <!--</p><br>-->
                    <ul style="text-align: left;">Landslides can happen anytime in all regions of Philippines. The best way to protect yourself and your family in case of a landslide is to follow these steps:<br><br>
                        <li>Be prepared to evacuate at a moment’s notice.</li>
                        <li>If you suspect imminent danger, evacuate immediately. Inform affected neighbours if you can, and contact your public works, fire or police department. 
                        </li>
                        <li>Listen for unusual sounds that might indicate moving debris, such as trees cracking or boulders knocking together. </li>
                    </ul><br>
                    <!--<p>If Indoors:</p><br>-->
                    <ul style="text-align: left;">If Indoors:<br><br>
                        <li>Find cover in the part of the building that is the furthest from the approaching landslide.
                        </li>
                        <li>Take shelter under a strong table or a bench.</li>
                        <li>Hold on firmly and stay put until all movement has stopped.
                        </li>
                    </ul><br>
                    <!--<p>If Outdoors:</p><br>-->
                    <ul style="text-align: left;">If Outdoors:<br><br>
                        <li>Move quickly away from its likely path, keeping clear of embankments, trees, power lines and poles.
                        </li>
                        <li>Stay away from the landslide area. The slope may experience additional failures for hours to days afterwards.</li>
                    </ul><br>
                    <!--<p>If you are in your Car:</p><br>-->
                    <ul style="text-align: left;">If you are in your Car:<br>
                        <li>Watch for collapsed pavement, mud, fallen rocks and other indications of possible debris flow. 
                        </li>
                        
                    </ul><br>

		            <h2>After a Landslide</h2> <br>
                    <!--<img src="../images/after_landslide.webp" style="width: 100%; height: 500px; " ><br><br>-->
                    <!--<p>Continue to take precautions and listen to and follow directions from local authorities.</p><br>-->
                    <ul style="text-align: left;">Continue to take precautions and listen to and follow directions from local authorities.<br><br>
                        <li>Listen to the radio, watch your local news channels, and/or follow your local news outlet and/or emergency officials on social media for further instructions from officials and local leaders. 
                        </li>
                        <li>Stay away from the slide area until local officials say it is safe to enter. </li>
                        <li>Look for and report broken utility lines to appropriate authorities. Reporting potential hazards will get the utilities turned off as quickly as possible, preventing further hazard and injury. 
                        </li>
                        <li>Check your home’s foundation, chimney and surrounding land for damage.</li>
                        <li>Replant damaged ground as soon as possible because erosion caused by loss of ground cover can lead to flash flooding.
                        </li>
                        <li>If you suspect your home is unsafe, do not enter. Rely on the professionals to clear your home for re-entry, if you are unsure. 
                        </li>
                        <li>Experiencing a disaster is challenging enough, but during the COVID-19 pandemic it can feel even more difficult. The Red Cross has many resources available to help you navigate these challenging times
                        </li>
                        
                    </ul><br>
        </div>
        </div>
        <!-- ----------------SOIL EROSION--------------------- -->
        <div class="panel" id="four-panel">
        <div class="panel-content">

          <h2>Soil Erosion</h2><br>
          <img src="../images/Soil Erosion(2).png"><br><br>
                    <p>According to a Pereira and Muñoz-Rojas (2017) synthesis, soil erosion is one of the major causes, evidence of, and key variables used to assess and understand land degradation. Soil erosion is a consequence of unsustainable land use and other disturbances, such as fire, mining, or intensive agricultural uses. The loss of soil may have serious impacts on the quantity and quality of soil ecosystem services, with serious economic, social, and political implications.
                    </p><br>

                    <h2>How to prevent Soil Erosion?</h2> <br>
                    <!--<img src="../images/SOIL-EROSION.webp"  style="width: 100%; height: 500px; "><br><br>-->
                    Using Basic Erosion Prevention Techniques<br><br>
                    <ol>
                        <li>Plant grass and shrubs.</li>
                        <p>Bare soil is easily swept away by wind and water, the two main causes of erosion. Plant roots hold the soil together, while their leaves block rain and stop it from breaking the soil apart. Turf, ornamental grass, and low, spreading shrubs work best since they cover the soil completely.</p>
                    <ul style="text-align: left;"><br>
                        <li>If you have any bare ground, try to establish plant cover as soon as possible to limit erosion.</li>
                        <li>If the ground is mostly flat (slope of 3:1 or less), this might be enough to solve the problem. Steep slopes erode faster, so they need more protection.</li><br><br>
                    </ul>

                        <li>Add mulch or rocks.</li>
                        <p>This will weigh down the soil and protect the seeds and young plants underneath from getting washed away. It also slows the absorption of water to reduce runoff. Grass clippings or bark chips work especially well.</p>
                    <ul style="text-align: left;">
                        <li>If you don’t plant anything, keep the soil covered with mulch. You can also add mulch around plants to add another layer of protection or to keep the soil warm.</li>
                    </ul><br><br>

                        <li>Use mulch matting to hold vegetation on slopes.</li>
                        <p>Simply lay the mat over your seeds or young plants. On steep slopes, dig a small trench at the top of the hill first. Lay the top of the mat in the trench, fill it up with soil, then fold the mat back over the top. This helps water run over the top of the mat, where the mat will slow it down, instead of traveling underneath it.</p>
                    <ul style="text-align: left;">
                        <li>Fiber mulch mats or erosion control mats are a layer of mulch held together in a fiber mesh. This structure holds the mulch together in areas where normal mulch would be washed or blown away.</li>
                    </ul><br><br>

                        <li>Put down fiber logs.</li>
                        <p>Another option for erosion control on steep slopes is a series of rolled up logs or "wattles" made from fibrous material (like straw). Water running down the slope will slow down when it hits the logs, soaking into the soil instead of carrying mud downhill. Put the logs down across the slope, 10 to 25 feet (3–8m) apart. Hold them in place with wooden stakes or sturdy, living plants.</p>
                    <ul style="text-align: left;">
                        <li>You can plant seeds directly in the logs to protect them while they grow.</li>
                        <li>If you do plant seeds directly into the logs, you should still use stakes to hold the logs in place, at least until the seeds develop sturdy roots that go into the soil.</li>
                    </ul><br><br>

                        <li>Build retaining walls.</li>
                        <p>Badly eroded slopes will continue to collapse downhill until they are stabilized. A retaining wall at the base of the slope will block the soil and slow down the collapse. This gives grass or other plants time to grow and help the soil hold together.</p>
                    <ul style="text-align: left;">
                        <li>Give the wall a 2% slope on the side (perpendicular to the incline) so that water flows off to the side instead of pooling</li>
                        <li>You may build the wall from concrete blocks, rock, or wood. Only use wood treated with a preservative to prevent rot.</li>
                        <li>Use retaining walls around flowerbeds and other raised soil areas as well.</li>
                        <li>You may need local government approval to build these structures.</li>
                    </ul><br><br>

                        <li>Improve drainage</li>
                        <p>All buildings should have gutters or pipes that can drain water effectively out of your garden and into water collection systems. Without adequate drainage, heavy rain could wash away a whole layer of topsoil.</p>
                    <ul style="text-align: left;">
                        <li>Areas with heavy water runoff may require installing an underground perforated drainage pipe.</li>
                    </ul> <br><br>

                        <li>Reduce watering if possible.</li>
                        <p>Over-watering your garden can speed up erosion by washing away soil. Use less water if you can, or install a drip irrigation system. Since a drip system only delivers small amounts of water at a time, there is no water flooding across the surface to carry topsoil.</p><br><br>
        
                        <li>Avoid soil compaction. </li>
                        <p>When people, animals, or machines travel over soil, they press it down, compacting the soil into a dense layer. Since there is less space between dirt particles in compacted soil, water has a hard time draining through, and carries soil on the surface downhill instead. Walk on paving stones or cleared paths instead of trampling the soil, especially when it is wet. Adding compost or manure can also help by attracting earthworms, which break the soil into looser clumps.</p>
                    <ul style="text-align: left;">
                        <li>Compacted soil also makes it harder for plants to become established, since the roots have trouble breaking through.</li>
                        <li>Compaction always lead to net erosion. The water may run off of compacted soil, but as it runs off it generates more force, which can increase the erosion in other areas.</li>
                    </ul>       
                    </ol>

                    Preventing Farmland Erosion
                    <ol><br><br>
                        <li>Plant trees to prevent landslides. </li>
                        <p>Tree roots are powerful tools when soil is too eroded or steep to plant. Plant native trees on steep slopes and riverbanks to reduce soil loss.</p>
                    <ul style="text-align: left;">
                        <li>Bare ground around the tress still needs to be covered in mulch or grass for best results.</li>
                        <li>Keep in mind that older trees will be more effective at preventing landslides than new saplings. It may take some time before your tree develops roots that are strong enough.</li>
                    </ul><br><br>

                        <li>Reduce tillage.</li>
                        <p>Deep, frequent tillage creates a layer of compact soil vulnerable to water erosion, topped by loose soil easily removed by wind. Consider a zero-tillage approach using a coulter or other deep planting device.</p>
                    <ul style="text-align: left;">
                        <li>These conservation tillage techniques also reduce the amount of vehicle traffic, and therefore soil compaction.</li>
                    </ul><br><br>

                        <li>Protect weak crops with strip cropping.</li>
                        <p>Crops with weak roots or that need to be sparsely planted are more vulnerable to erosion. Plant these in strips, alternating with strips of an erosion-resistant crop such as dense grass or legumes.</p>
                    <ul style="text-align: left;">
                        <li>Plant the crops so they contour the slope.</li>
                        <li>Plant these crops perpendicular to the prevailing wind if possible.</li>
                    </ul><br><br>

                        <li>Practice wet season spelling.</li>
                        <p>Grazing land cannot remain healthy and erosion-resistant if cattle are allowed to graze year-round. For best results, close off a paddock for the entire wet season to allow grasses to reestablish themselves.</p>
                    <ul style="text-align: left;">
                        <li>This may not be effective if the other paddocks cannot support the spelled cattle.</li>
                        <li>If possible, keep cattle away from riverbanks and heavily eroded soil at all times.</li>
                    </ul><br><br>

                        <li>Keep soil covered year-round.</li>
                        <p>Bare soil is far more vulnerable to erosion than soil with ground cover. Aim for at least 30% ground cover on all grazing land, ideally 40% or more.</p>
                    <ul style="text-align: left;">
                        <li>After you harvest your crops, leave the residue on the soil as mulch. Alternatively, plant hardy winter crops.</li>
                    </ul><br><br>

                        <li>Control downhill runoff with flumes. </li>
                        <p>Runoff is concentrated into a narrower area as it travels across lands. The points where the concentrated runoff reaches a slope are particularly vulnerable to erosion. You can build a paved flume, or lined channel, to lead the water to a safe drainage system. Build these at gully heads as well.</p>
                    <ul style="text-align: left;">
                        <li>Another option is to build a swale to re-direct the runoff into a pond. Building several swales along a hillside can greatly reduce runoff volume and eliminate the need for a paved channel.</li>
                        <li>Do not build flumes on slopes steeper than 1.5:1.</li>
                    </ul> <br><br>
                    
                        <li>Turn a hillside into terraces. </li>
                        <p>The steepest slopes are almost impossible to farm on. Turn the hill into terraces instead by building retaining walls running across the slope. In between the walls, grade the soil level to create a flat area resistant to erosion.</p>
      
                    </ol><br>
        </div>
        </div>
        <!-- ----------------TSUNAMI--------------------- -->
        <div class="panel" id="five-panel">
        <div class="panel-content">
          <h2>Tsunami</h2><br>
          <img src="../images/Tsunami(2).png"><br><br>
                    <p>A Tsunami is a series of sea waves commonly generated by under-the-sea earthquakes and whose heights could be greater than 5 meters. It is erroneously called tidal waves and sometimes mistakenly associated with storm surges. Tsunamis can occur when the earthquake is shallow-seated and strong enough to displace parts of the seabed and disturb the mass of water over it.
                    </p><br>

                    <h2>Before a Tsunami</h2> <br>
                    <!--<img src="../images/before_tsunami.webp"  style="width: 100%; height: 500px; " ><br><br>-->
                    <!--<p>Tsunamis can hit people in coastal areas within minutes after a severe earthquake. The best way to protect yourself and your family in case of a tsunami is to follow these steps:-->
                    <!--</p><br>-->
                    <ul>Tsunamis can hit people in coastal areas within minutes after a severe earthquake. The best way to protect yourself and your family in case of a tsunami is to follow these steps:<br><br>
                        <li>Find out if your home, school, workplace or other frequently visited locations are in tsunami hazard areas. For high risk areas, know the earthquake and tsunami plans for each location. 
                        </li>
                        <li>Contact your municipality to know the risks, evacuation and alerting system in your community. Know the sound of the alert and make sure all in your family are familiar with it and what to do. Sign up for local alerts.
                        </li>
                        <li>
                            For up-to-date information from coast to coast to coast, the Government of Canada and the Canadian National Seismograph Network monitor significant earthquake reports in Canada. 
                        </li>
                        <li>
                            Make a personalized preparedness emergency kit. Families should be prepared to be self-sustaining for at least three days.
                        </li>
                        <li>
                            Kits should include practical items such as drinking water, food, cash, and a portable radio. However, they should also include items that are unique to your own families’ needs. This could include baby items, medical prescriptions, pet food, etc.
                        </li>
                        <li>
                            If you have already dipped into your emergency kit and food supply while staying at home, consider safely getting the supplies to replenish it following your local public health authorities’ guidelines for leaving your residence.
                        </li>
                        <li>
                            During the COVID-19 pandemic also add hygiene items such as hand sanitizer and non-medical masks to your kit to keep your family safe during an evacuation. 
                        </li>
                        
                    </ul><br>

		            <h2>During a Tsunami</h2> <br>
                    <!--<img src="../images/TSUNAMI.webp"  style="width: 100%; height: 500px; "><br><br>-->
                    <!--<p>If you feel an earthquake, drop, cover and hold:</p><br>-->
                    <ul>If you feel an earthquake, drop, cover and hold:<br><br>
                        <li>
                            Drop: drop to the ground before the earthquake causes you to fall. 
                        </li>
                        <li> 
                        Cover: Take cover under a piece of heavy furniture such as a desk or table to protect your head and torso from falling objects.
                        </li>
                        <li>
                            Hold: hold onto the object you are under so that you remain covered.
                            </li>
                    </ul> <br>   
                    <!--<p>Be aware of the signs of a tsunami:</p><br>-->
                    <ul>Be aware of the signs of a tsunami:<br><br>
                        <li>
                            A strong earthquake lasting 20 seconds or more near the coast. 
                        </li>
                        <li>
                            A noticeable rapid rise or fall of coastal waters.
                        </li>
                        <li>
                            Coastal water makes unusual noises. The noise may sound like an approaching train, plane, or whistling. 
                        </li>
                        <li>
                            Following an earthquake, move quickly to higher ground away from the coast. In case of a tsunami warning,  be prepared to evacuate at a moment’s notice. </li>
                        <li>
                            Follow posted evacuation routes, where present. Take your animals with you but do not delay your evacuation to collect them. 
                        </li>
                        <li>
                            A tsunami is a series of waves that can continue for hours and the next waves may be larger than earlier ones. Do not assume that after one wave, the danger is over. If you cannot evacuate to higher ground, evacuate vertically to a higher floor, onto a roof, up a tree, or grab a floating object. 
                        </li>
                        <li>
                            If you are at sea, stay there. Boats are generally safer in water deeper than 20 metres. Ships are safest on high seas in water deeper than 100 metres. </li>
                        <li>
                            Watching a tsunami could put you in grave danger. If you can see the wave, you are too close to escape it. 
                        </li>
                        <li>
                            Monitor the tsunami’s progress and listen for warnings or instructions from local officials. If you are safe when the first tsunami hits, stay put until authorities declare all is safe as more waves may follow.
                        </li>
                        
                    </ul><br>

		            <h2>After a Tsunami</h2> <br>
                    <!--<img src="../images/after_tsunami.webp" style="width: 100%; height: 500px; " ><br><br>-->
                    <!--<p>Continue to take precautions and listen to and follow directions from local authorities.-->
                    <!--</p><br>-->
                    <ul>Continue to take precautions and listen to and follow directions from local authorities.<br><br>
                        <li>
                            Be prepared for aftershocks, which could generate another tsunami. 
                        </li>
                        <li>
                            Return home only after local officials tell you it is safe. A tsunami is a series of waves that may continue for hours. Do not assume that after one wave the danger is over. The next wave may be larger than the first one. 
                        </li>
                        <li>
                            Be aware of secondary effects. These include landslides, contaminated water, mudflows, damaged bridges, buildings and roads, and other hazards. 
                        </li>
                        <li>
                            Only make calls if you require emergency services.
                        </li>
                        <li>
                            Stay out of any building that has water around it. Tsunami force can cause floors to crack or walls to collapse.
                        </li>
                        <li>
                            If you suspect your home is unsafe, do not enter. Rely on the professionals to clear your home for re-entry, if you are unsure. </li>
                        <li>
                            Do not light matches or turn on lights or appliances until you are sure there are no gas leaks or flammable liquids spilled. Avoid use of contaminated water.
                        </li>
                        <li>
                            Place a HELP sign in your window if you need assistance.
                        </li>
                        <li>Experiencing a disaster is challenging enough, but during the COVID-19 pandemic it can feel even more difficult. The Red Cross has many resources available to help you navigate these challenging times.
                        </li>
                    
                        
                    </ul><br>

        </div>
      </div>
           
                
        <!-- 
            1. Add SVG file 
        -->
    </div>

    
</div>

</div>
</div>
<!----------------------------------MAIN CONTENT END HERE --------------------------------------->
  </div> 
  </section>


  <?php include ('../includes/ft-script.php');?>