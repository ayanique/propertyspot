<?php

if (!defined('SKUDO_PLG_URL')) die('No shilly shally, kids.');

add_action( 'upper_vc_load_default_templates_action','upper_studio_templates_for_vc' ); 

function upper_studio_templates_for_vc() {

$skudo_get_directory = SKUDO_PLG_URL."lib/upper-studio/";

$cat_display_names = array(	
	'about' => __('About', 'skudo'),
	'counters' => __('Counters', 'skudo'),
	'faq' => __('FAQ Section', 'skudo'),
	'general' => __('General', 'skudo'),
	'icons' => __('Icons', 'skudo'),
	'contactforms' => __('Contact Forms', 'skudo'),
	'portfolio' => __('Portfolio', 'skudo'),
	'pricing' => __('Pricing', 'skudo'),
	'services' => __('Services', 'skudo'),'team' => __('Team', 'skudo'),
	'verticalstabsicon' => __('Stylish Tabs','skudo'),
	'testimonials' => __('Testimonials', 'skudo'),
	'team' => __('Team', 'skudo')
);


/*NOVO SKUDO*/

$data = array();
$data['name'] = __( 'Title with Partners (Scroller)', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-135.jpg'; 
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1499102811135{padding-top: 100px !important;padding-bottom: 100px !important;background-color: #ffffff !important;}"][vc_column][ult_animation_block animation="fadeIn" animation_duration="1" animation_delay="0" animation_iteration_count="1" opacity_start_effect="80"][vc_custom_heading text="WITHT SCROLLER" font_container="tag:h3|text_align:center" use_theme_fonts="yes"][vc_empty_space height="60px"][/ult_animation_block][ult_animation_block animation="fadeInUp" animation_duration="0.5" animation_delay="1" animation_iteration_count="1" opacity_start_effect="80"][ultimate_carousel slide_to_scroll="single" slides_on_desk="6" slides_on_tabs="4" arrows="off" dots="off"][vc_single_image image="10109" img_size="full"][vc_single_image image="10108" img_size="full"][vc_single_image image="10107" img_size="full"][vc_single_image image="10106" img_size="full"][vc_single_image image="10105" img_size="full"][vc_single_image image="10104" img_size="full"][vc_single_image image="10103" img_size="full"][vc_single_image image="10098" img_size="full"][/ultimate_carousel][/ult_animation_block][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);


$data = array();
$data['name'] = __( 'Timeline', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-134.jpg'; 
$data['content'] = <<<CONTENT
<span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span>[vc_row bg_type="bg_color" bg_override="full" css=".vc_custom_1499104289737{margin-top: 60px !important;margin-bottom: 50px !important;background-color: #ffffff !important;}" bg_color_value="#ffffff" animation_type="h" horizontal_animation="left-animation" vertical_animation="top-animation"][vc_column][ult_animation_block animation="fadeIn" animation_duration="1" animation_delay="0" animation_iteration_count="1" opacity="off"][icon_timeline timeline_style="jstime" timeline_line_style="solid" time_block_bg_color="#f7f7f7" time_sep_color="#444444" time_sep_bg_color="#444444" timeline_layout="timeline-custom-width" custom_width="361"][icon_timeline_sep time_sep_title="1955-1985 Youth &amp; Apple's early years"][icon_timeline_item time_title="24 Feb 1955" time_position="auto"]<img class="alignnone size-full wp-image-3344" src="https://www.brainstormforce.com/demos/ultimate/wp-content/uploads/2014/03/021.jpg" alt="02" />

Steven Paul was born in San Francisco, the son of Abdulfattah and Joanne. He is adopted by Jobs Family[/icon_timeline_item][icon_timeline_item time_title="1969" time_position="auto"]<img class="alignnone size-full wp-image-3236" src="https://www.brainstormforce.com/demos/ultimate/wp-content/uploads/2014/03/steve_wozniak_and_steve_jobs_met2.jpg" alt="steve_wozniak_and_steve_jobs_met2" />

Steve Jobs meets Steve Wozniak, 5 years older, through a mutual friend. Woz and Steve share a love of electronics, Bob Dylan, and pranks[/icon_timeline_item][icon_timeline_item time_title="1 Apr 1976" time_position="auto"]<img class="alignnone size-full wp-image-3226" src="https://www.brainstormforce.com/demos/ultimate/wp-content/uploads/2014/03/full.2366288306_b60155ce23_o.jpg" alt="full.2366288306_b60155ce23_o" />

Apple Computer Inc. is incorporated by Steve Jobs, Steve Wozniak and Ron Wayne[/icon_timeline_item][icon_timeline_item time_title="Spring 1976" time_position="auto"]<img class="alignnone size-full wp-image-3235" src="https://www.brainstormforce.com/demos/ultimate/wp-content/uploads/2014/03/steve_wozniak_and_steve_jobs_1.jpg" alt="steve_wozniak_and_steve_jobs_1" />

Steve and Woz start assembling Apple I computers in the Jobses' garage, and sell them to computer hobbyists, including 50 for the Byte Shop[/icon_timeline_item][icon_timeline_feat time_title="12 Dec 1980" time_position="auto"]<img class="alignnone size-full wp-image-3341" src="https://www.brainstormforce.com/demos/ultimate/wp-content/uploads/2014/03/o-STEVE-JOBS-1977-facebook1.jpg" alt="o-STEVE-JOBS-1977-facebook" />

Apple goes public, increasing Steve Jobs’ net worth from dozens of millions of dollars to over $200 million[/icon_timeline_feat][icon_timeline_item time_title="Feb 1982" time_position="auto"]<img class="alignnone size-full wp-image-3240" src="https://www.brainstormforce.com/demos/ultimate/wp-content/uploads/2014/03/Striking-It-Rich.jpg" alt="Striking-It-Rich" />

A portrait of Steve Jobs ends up on the cover of Time Magazine, under the title 'Striking it Rich'.[/icon_timeline_item][icon_timeline_item time_title="8 Apr 1983 " time_position="auto"]<img class="alignnone size-full wp-image-3345" src="https://www.brainstormforce.com/demos/ultimate/wp-content/uploads/2014/03/031.jpg" alt="03" />

PepsiCo CEO John Sculley becomes Apple's CEO after having been wooed by Steve Jobs for several months[/icon_timeline_item][icon_timeline_item time_title="24 Jan 1984" time_position="auto"]<img class="alignnone size-full wp-image-3225" src="https://www.brainstormforce.com/demos/ultimate/wp-content/uploads/2014/03/apple-1984-runner.jpg" alt="apple-1984-runner" />

Macintosh is launched in great fanfare at Apple’s annual shareholder meeting[/icon_timeline_item][icon_timeline_item time_title="17 Sep 1985" time_position="auto"]<img class="alignnone size-full wp-image-3220" src="https://www.brainstormforce.com/demos/ultimate/wp-content/uploads/2014/03/070409c1N.jpg" alt="070409c1N" />

Steve Jobs resigns from Apple and starts NeXT with five other refugees from Apple.[/icon_timeline_item][icon_timeline_sep time_sep_title="1986-1996 NeXT Pixar &amp; wilderness"][icon_timeline_item time_title="30 Jan 1986" time_position="auto"]

Jobs buys the computer division of George Lucas' ILM for $10 million and incorporates it as Pixar.[/icon_timeline_item][icon_timeline_item time_title="12 Oct 1988" time_position="auto"]Steve Jobs introduces the NeXT Cube in San Francisco to great critical acclaim, pitching it as a workstation for higher education

<img class="alignnone size-full wp-image-3218" src="https://www.brainstormforce.com/demos/ultimate/wp-content/uploads/2014/03/13.jpg" alt="13" />[/icon_timeline_item][icon_timeline_item time_title="Apr 1989" time_position="auto"]<img class="alignnone size-full wp-image-3238" src="https://www.brainstormforce.com/demos/ultimate/wp-content/uploads/2014/03/Steve-Jobs-Entrepreneur-of-the-Decade-cover-story-1989-pop_10605.jpg" alt="Steve-Jobs-Entrepreneur-of-the-Decade-cover-story-1989-pop_10605" />

Steve Jobs is named 'Entrepreneur of the decade' by Inc. magazine[/icon_timeline_item][icon_timeline_item time_title="18 Mar 1991 " time_position="auto"]<img class="alignnone size-full wp-image-3239" src="https://www.brainstormforce.com/demos/ultimate/wp-content/uploads/2014/03/Steve-Jobs-Laurene-Powell-wedding.jpg" alt="Steve-Jobs-Laurene-Powell-wedding" />

Steve Jobs marries Laurene Powell in Yosemite under the blessing of Steve's old zen guru Kobin Chino. Laurene is already pregnant[/icon_timeline_item][icon_timeline_feat time_title="29 Nov 1995" time_position="auto"]<img class="alignnone size-full wp-image-3343" src="https://www.brainstormforce.com/demos/ultimate/wp-content/uploads/2014/03/Toy-Story1.jpg" alt="Toy-Story" />

One week after Toy Story is out, Pixar goes public. Steve Jobs’s worth rises to $1.5 billion, more than it ever was during his first tenure at Apple[/icon_timeline_feat][icon_timeline_item time_title="Early 1996 " time_position="auto"]<img class="alignnone size-full wp-image-3347" src="https://www.brainstormforce.com/demos/ultimate/wp-content/uploads/2014/03/01pixar.xlarge1.jpg" alt="01pixar.xlarge1" />Steve Jobs negotiates a breakthrough deal between Pixar and Disney with its CEO Michael Eisner. The deal includes landmark rights for a studio, such as equal billing[/icon_timeline_item][icon_timeline_item time_title="Dec 1996" time_position="auto"]<img class="alignnone size-full wp-image-3231" src="https://www.brainstormforce.com/demos/ultimate/wp-content/uploads/2014/03/next-apple-merger.jpg" alt="next-apple-merger" />

Apple, which was desperately looking for a modern operating system to buy, eventually buys NeXT for $400 million. Steve Jobs is named "informal adviser" to Apple CEO Gil Amelio[/icon_timeline_item][icon_timeline_sep time_sep_title="1997-2004 Rebuilding Apple"][icon_timeline_item time_title="Jul 1997" time_position="auto"]<img class="alignnone size-full wp-image-3221" src="https://www.brainstormforce.com/demos/ultimate/wp-content/uploads/2014/03/150739-steve-jobs-interim-ceo-of-apple-computer-inc-talks-about-apples-softwa.jpg" alt="150739-steve-jobs-interim-ceo-of-apple-computer-inc-talks-about-apples-softwa" />

Gil Amelio is ousted by the Apple Board of directors after a disastrous quarter. Steve Jobs is named interim CEO in his place and installs his NeXT executive team at the top of Apple[/icon_timeline_item][icon_timeline_item time_title="6 Aug 1997" time_position="auto"]<img class="alignnone size-full wp-image-3219" src="https://www.brainstormforce.com/demos/ultimate/wp-content/uploads/2014/03/0631.jpg" alt="0631" />

Steve Jobs introduces Apple's new board of directors and a truce with Microsoft at Macworld Boston[/icon_timeline_item][icon_timeline_item time_title="Fall 1997" time_position="auto"]

Apple starts its 'Think Different' campaign to restore its damaged brand image. The new slogan will quickly enter popular culture and define the company for the next five years[/icon_timeline_item][icon_timeline_item time_title="5 Jan 1999" time_position="auto"]<img class="alignnone size-full wp-image-3223" src="https://www.brainstormforce.com/demos/ultimate/wp-content/uploads/2014/03/61390460592_freesize1.jpg" alt="61390460592_freesize1" />

Steve Jobs introduces the new Power Mac G3 and the color iMacs at Macworld San Francisco[/icon_timeline_item][icon_timeline_item time_title="April 1999" time_position="auto"]<img class="alignnone size-full wp-image-3233" src="https://www.brainstormforce.com/demos/ultimate/wp-content/uploads/2014/03/Pirates_Of_Silicon_Valley_357751.jpg" alt="Pirates_Of_Silicon_Valley_357751" />

Pirates of Silicon Valley, a TV movie starring Noah Wyle as young Steve Jobs, airs[/icon_timeline_item][icon_timeline_item time_title="5 Jan 2000" time_position="auto"]<img class="alignnone size-full wp-image-3230" src="https://www.brainstormforce.com/demos/ultimate/wp-content/uploads/2014/03/jobs8_2000_1980131i.jpg" alt="jobs8_2000_1980131i" />

At Macworld San Francisco, Steve Jobs drops the 'interim' in his title and officially becomes Apple’s CEO.[/icon_timeline_item][icon_timeline_item time_title="19 May 2001 " time_position="auto"]<img class="alignnone size-full wp-image-3224" src="https://www.brainstormforce.com/demos/ultimate/wp-content/uploads/2014/03/apple_store_amsterdam_staircase.jpg" alt="apple_store_amsterdam_staircase" />

Apple opens its first Retail Stores in Tysons Corner, Virginia and Glendale, California[/icon_timeline_item][icon_timeline_item time_title="23 Oct 2001 " time_position="auto"]<img class="alignnone size-full wp-image-3222" src="https://www.brainstormforce.com/demos/ultimate/wp-content/uploads/2014/03/20111023_ipod.jpg" alt="20111023_ipod" />

After an 8-month crash development program, Steve Jobs unveils iPod at a small media event on the company's campus. He has no idea how it will tranform Apple[/icon_timeline_item][icon_timeline_item time_title="28 Apr 2003 " time_position="auto"]Apple opens the revolutionary online iTunes Music Store in the US, after negotiating landmark deals with all major music labels[/icon_timeline_item][icon_timeline_item time_title="30 May 2003" time_position="auto"]

Opening day of Finding Nemo, Pixar’s first Best Animated Feature Academy Award winner[/icon_timeline_item][icon_timeline_item time_title="23 Jun 2003" time_position="auto"]Steve Jobs unveils the Power Mac G5, the world’s fastest computer, at WWDC[/icon_timeline_item][icon_timeline_item time_title="Fall 2003" time_position="auto"]Steve Jobs is diagnosed with pancreatic cancer, but stubbornly refuses any modern medical treatment for months. He tries alternative diets instead[/icon_timeline_item][icon_timeline_item time_title="6 Jan 2004" time_position="auto"]Steve unveils the iPod mini and the iLife suite at Macworld. The iPod mini will soon become the world's best-selling MP3 player and truly establish Apple as a consumer electronics powerhouse[/icon_timeline_item][icon_timeline_item time_title="Aug 2004" time_position="auto"]Steve Jobs finally has his pancreatic tumor removed by surgery[/icon_timeline_item][icon_timeline_sep time_sep_title="2005-2011 The Big Apple"][icon_timeline_item time_title="12 Jun 2005 " time_position="auto"]

Steve Jobs makes a memorable commencement speech at Stanford University. History will remember its closing remarks, Steve's advice to the young students:
<blockquote>'Stay hungry, stay foolish'</blockquote>
[/icon_timeline_item][icon_timeline_item time_title="24 Jan 2006 " time_position="auto"]The Walt Disney Company acquires Pixar for $7.4 billion. Pixar's largest shareholder Steve Jobs joins the Disney board while Ed Catmull becomes president of the Walt Disney Animation Studios, and John Lasseter its chief creative officer[/icon_timeline_item][icon_timeline_item time_title="9 Jan 2007 " time_position="auto"]<img class="alignnone size-full wp-image-3227" src="https://www.brainstormforce.com/demos/ultimate/wp-content/uploads/2014/03/image-1024x792.jpg" alt="image-1024x792" />

In his most memorable keynote presentation ever, at Macworld 2007, Steve Jobs introduces iPhone and its revolutionary touch-screen interface.[/icon_timeline_item][icon_timeline_item time_title="15 Jan 2008 " time_position="auto"]

At Macworld 2008, Steve Jobs introduces MacBook Air, with the tagline 'the world's thinnest notebook'. Three years later, it will come to redefine all of Apple's notebook product line[/icon_timeline_item][icon_timeline_item time_title="Apr 2009" time_position="auto"]Steve receives a liver transplant at the Methodist University Hospital in Memphis, Tennessee. He was weeks away from dying when he got the surgery[/icon_timeline_item][icon_timeline_item time_title="9 Sep 2009 " time_position="auto"]<img class="alignnone size-full wp-image-3229" src="https://www.brainstormforce.com/demos/ultimate/wp-content/uploads/2014/03/ipod_icons___5_colours_by_mindjek-d3cq1u3.jpg" alt="ipod_icons___5_colours_by_mindjek-d3cq1u3" />

Back at Apple, Steve Jobs makes the first public appearance after his transplant to introduce new iPods at the 'It's Only Rock'N'Roll' event[/icon_timeline_item][icon_timeline_item time_title="27 Jan 2010" time_position="auto"]<img class="alignnone size-full wp-image-3228" src="https://www.brainstormforce.com/demos/ultimate/wp-content/uploads/2014/03/iPad-Mini.jpg" alt="iPad-Mini" />

After months of wild rumors, Steve Jobs unveils iPad, 'the biggest thing Apple's ever done'. The tablet runs the same operating system as iPhone[/icon_timeline_item][icon_timeline_item time_title="24 Aug 2011 " time_position="auto"]<img class="alignnone size-full wp-image-3234" src="https://www.brainstormforce.com/demos/ultimate/wp-content/uploads/2014/03/rip_steve_jobs_by_xmeerzx-d4bzuvm.jpg" alt="rip_steve_jobs_by_xmeerzx-d4bzuvm" />

Steve Jobs resigns as CEO of Apple, with the words
<blockquote>'I have always said if there ever came a day when I could no longer meet my duties and expectations as Apple's CEO, I would be the first to let you know. Unfortunately, that day has come.'</blockquote>
[/icon_timeline_item][icon_timeline_item time_title="5 Oct 2011" time_position="auto"]<img class="alignnone size-full wp-image-3237" src="https://www.brainstormforce.com/demos/ultimate/wp-content/uploads/2014/03/Steve-Jobs-1955-2011.jpg" alt="Steve-Jobs-1955-2011" />

Steve Jobs dies at home, surrounded by his family[/icon_timeline_item][/icon_timeline][/ult_animation_block][/vc_column][/vc_row]<span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_end">﻿</span>
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Tables', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-133.jpg'; 
$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="80px"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<table border="1" cellspacing="5" cellpadding="5">
<tbody>
<tr>
<th>
<h5><strong>Name</strong></h5>
</th>
<th>
<h5><strong>Salary</strong></h5>
</th>
</tr>
<tr>
<td>Paulo Moreira</td>
<td>15000</td>
</tr>
<tr>
<td>João Garcia</td>
<td>7000</td>
</tr>
<tr>
<td>José Oliveia</td>
<td>2000</td>
</tr>
<tr>
<td>Nina Soraia</td>
<td>4000</td>
</tr>
<tr>
<td>Lucas Doe</td>
<td>1000</td>
</tr>
<tr>
<td>Maria Ceu</td>
<td>500</td>
</tr>
<tr>
<td>Jonas Pistolas</td>
<td>35000</td>
</tr>
<tr>
<td>Manuel Varga</td>
<td>11000</td>
</tr>
<tr>
<td>Ramesh Raman</td>
<td>5000</td>
</tr>
<tr>
<td>Shabbir Hussein</td>
<td>7000</td>
</tr>
</tbody>
</table>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column][vc_empty_space height="80px"][/vc_column][/vc_row][vc_row][vc_column width="1/2"][vc_column_text]
<h5 style="text-align: center">Example 2</h5>
&nbsp;
<table border="1">
<tbody>
<tr>
<th>Column 1</th>
<th>Column 2</th>
<th>Column 3</th>
</tr>
<tr>
<td rowspan="2">Row 1 Cell 1</td>
<td>Row 1 Cell 2</td>
<td>Row 1 Cell 3</td>
</tr>
<tr>
<td>Row 2 Cell 2</td>
<td>Row 2 Cell 3</td>
</tr>
<tr>
<td colspan="3">Row 3 Cell 1</td>
</tr>
</tbody>
</table>
[/vc_column_text][/vc_column][vc_column width="1/2"][vc_column_text]
<h5 style="text-align: center">Example 3</h5>
&nbsp;
<table border="1" width="100%">
<thead>
<tr>
<td colspan="4">This is the head of the table</td>
</tr>
</thead>
<tfoot>
<tr>
<td colspan="4">This is the foot of the table</td>
</tr>
</tfoot>
<tbody>
<tr>
<td>Cell 1</td>
<td>Cell 2</td>
<td>Cell 3</td>
<td>Cell 4</td>
</tr>
</tbody>
</table>
[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Parallax Video', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-132.jpg'; 
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" bg_type="video" video_url="http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2019/01/tp_vid_clouds.mp4" video_opts="loop,muted" video_poster="id^10440|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/01/blog-corp4-2.jpg|caption^null|alt^null|title^blog-corp4-2|description^null" bg_override="full" enable_overlay="enable_overlay_value" overlay_color="rgba(0,0,0,0.8)" overlay_pattern="08.png" overlay_pattern_opacity="10" css=".vc_custom_1548353739543{padding-top: 350px !important;padding-bottom: 350px !important;}"][vc_column][vc_custom_heading text="PARALLAX VIDEO" font_container="tag:h2|text_align:center|color:%23ffffff" use_theme_fonts="yes"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Text Rows Columns', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-131.jpg'; 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1499103576883{margin-bottom: 40px !important;}"][vc_column][vc_empty_space height="50px"][vc_custom_heading text="1/1 Column" font_container="tag:h3|text_align:left" google_fonts="font_family:Montserrat%3Aregular%2C700|font_style:400%20regular%3A400%3Anormal"][vc_empty_space height="10px"][vc_column_text]Continually develop ethical process improvements via pandemic deliverables. Rapidiously integrate empowered interfaces through viral platforms. Interactively redefine cross-platform manufactured products and global meta-services. Competently administrate emerging innovation after future-proof channels. Appropriately procrastinate emerging e-tailers before client-centered technologies.</p>
<p>Dynamically develop turnkey paradigms for just in time convergence. Energistically matrix covalent niches vis-a-vis clicks-and-mortar initiatives. Completely enable highly efficient supply chains rather than just in time initiatives. Completely supply extensive paradigms.[/vc_column_text][vc_empty_space height="50px"][/vc_column][/vc_row][vc_row css=".vc_custom_1499103571032{margin-bottom: 40px !important;}"][vc_column width="1/2"][vc_custom_heading text="1/2 Column" font_container="tag:h3|text_align:left" google_fonts="font_family:Montserrat%3Aregular%2C700|font_style:400%20regular%3A400%3Anormal"][vc_empty_space height="10px"][vc_column_text]Professionally strategize user friendly value for cost effective core competencies. Proactively transition mission-critical methodologies with cutting-edge architectures. Dramatically whiteboard dynamic action items for viral benefits.[/vc_column_text][vc_empty_space height="50px"][/vc_column][vc_column width="1/2"][vc_custom_heading text="1/2 Column" font_container="tag:h3|text_align:left" google_fonts="font_family:Montserrat%3Aregular%2C700|font_style:400%20regular%3A400%3Anormal"][vc_empty_space height="10px"][vc_column_text]Professionally strategize user friendly value for cost effective core competencies. Proactively transition mission-critical methodologies with cutting-edge architectures. Dramatically whiteboard dynamic action items for viral benefits.[/vc_column_text][vc_empty_space height="50px"][/vc_column][/vc_row][vc_row css=".vc_custom_1499103582167{margin-bottom: 40px !important;}"][vc_column width="1/3"][vc_custom_heading text="1/3 Column" font_container="tag:h3|text_align:left" google_fonts="font_family:Montserrat%3Aregular%2C700|font_style:400%20regular%3A400%3Anormal"][vc_empty_space height="10px"][vc_column_text]Professionally strategize user friendly value for cost effective core competencies. Proactively transition mission-critical methodologies with cutting-edge architectures. Dramatically whiteboard dynamic action items for viral benefits.[/vc_column_text][vc_empty_space height="50px"][/vc_column][vc_column width="1/3"][vc_custom_heading text="1/3 Column" font_container="tag:h3|text_align:left" google_fonts="font_family:Montserrat%3Aregular%2C700|font_style:400%20regular%3A400%3Anormal"][vc_empty_space height="10px"][vc_column_text]Professionally strategize user friendly value for cost effective core competencies. Proactively transition mission-critical methodologies with cutting-edge architectures. Dramatically whiteboard dynamic action items for viral benefits.[/vc_column_text][vc_empty_space height="50px"][/vc_column][vc_column width="1/3"][vc_custom_heading text="1/3 Column" font_container="tag:h3|text_align:left" google_fonts="font_family:Montserrat%3Aregular%2C700|font_style:400%20regular%3A400%3Anormal"][vc_empty_space height="10px"][vc_column_text]Professionally strategize user friendly value for cost effective core competencies. Proactively transition mission-critical methodologies with cutting-edge architectures. Dramatically whiteboard dynamic action items for viral benefits.[/vc_column_text][vc_empty_space height="50px"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Round Chart (Background)', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-130.jpg'; 
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content" video_bg="yes" bg_type="image" parallax_style="vcpb-default" bg_image_new="id^10513|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/01/Mercedes.jpg|caption^null|alt^null|title^Mercedes|description^null" bg_override="full" enable_overlay="enable_overlay_value" overlay_color="rgba(0,0,0,0.7)" css=".vc_custom_1548349997958{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_column width="1/3"][vc_round_chart type="doughnut" style="modern" stroke_width="0" values="%5B%7B%22title%22%3A%22Design%22%2C%22value%22%3A%2260%22%2C%22color%22%3A%22blue%22%7D%2C%7B%22title%22%3A%22Programming%22%2C%22value%22%3A%2240%22%2C%22color%22%3A%22pink%22%7D%5D" animation="easeOutSine"][/vc_column][vc_column width="1/3"][vc_round_chart type="doughnut" stroke_width="0" values="%5B%7B%22title%22%3A%22Time%22%2C%22value%22%3A%2270%22%2C%22color%22%3A%22vista-blue%22%7D%2C%7B%22title%22%3A%22Development%22%2C%22value%22%3A%2230%22%2C%22color%22%3A%22white%22%7D%5D" animation="easeinOutQuint"][/vc_column][vc_column width="1/3"][vc_round_chart type="doughnut" style="custom" stroke_width="0" values="%5B%7B%22title%22%3A%22Customers%22%2C%22value%22%3A%2290%22%2C%22color%22%3A%22sandy-brown%22%2C%22custom_color%22%3A%22rgba(255%2C255%2C255%2C0.5)%22%7D%2C%7B%22title%22%3A%22Intervention%22%2C%22value%22%3A%2210%22%2C%22color%22%3A%22sky%22%7D%5D" animation="easeOutElastic"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Round Chart', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-129.jpg'; 
$data['content'] = <<<CONTENT
[vc_row enable_overlay="enable_overlay_value" overlay_color="rgba(0,0,0,0.7)" css=".vc_custom_1462989404099{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_column width="1/3"][vc_round_chart style="modern" stroke_width="0" values="%5B%7B%22title%22%3A%22Design%22%2C%22value%22%3A%2260%22%2C%22color%22%3A%22blue%22%7D%2C%7B%22title%22%3A%22Programming%22%2C%22value%22%3A%2240%22%2C%22color%22%3A%22pink%22%7D%5D"][/vc_column][vc_column width="1/3"][vc_round_chart style="modern" stroke_width="0" values="%5B%7B%22title%22%3A%22Time%22%2C%22value%22%3A%2270%22%2C%22color%22%3A%22vista-blue%22%7D%2C%7B%22title%22%3A%22Development%22%2C%22value%22%3A%2230%22%2C%22color%22%3A%22green%22%7D%5D"][/vc_column][vc_column width="1/3"][vc_round_chart stroke_width="0" values="%5B%7B%22title%22%3A%22Customers%22%2C%22value%22%3A%2290%22%2C%22color%22%3A%22sandy-brown%22%7D%2C%7B%22title%22%3A%22Intervention%22%2C%22value%22%3A%2210%22%2C%22color%22%3A%22sky%22%7D%5D" animation="easeOutElastic"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Double Progress Bar', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-128.jpg'; 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1462902956051{margin-top: 60px !important;margin-bottom: 80px !important;}"][vc_column width="1/2"][vc_progress_bar values="%5B%7B%22label%22%3A%22Team%20Work%22%2C%22value%22%3A%22100%22%2C%22color%22%3A%22custom%22%2C%22customcolor%22%3A%22%231abc9c%22%2C%22customtxtcolor%22%3A%22%233d3d3d%22%7D%2C%7B%22label%22%3A%22Money%22%2C%22value%22%3A%22100%22%2C%22color%22%3A%22custom%22%2C%22customcolor%22%3A%22%231abc9c%22%2C%22customtxtcolor%22%3A%22%233d3d3d%22%7D%2C%7B%22label%22%3A%22Hardware%22%2C%22value%22%3A%2285%22%2C%22color%22%3A%22custom%22%2C%22customcolor%22%3A%22%231abc9c%22%2C%22customtxtcolor%22%3A%22%233a3a3a%22%7D%2C%7B%22label%22%3A%22Software%22%2C%22value%22%3A%2285%22%2C%22color%22%3A%22custom%22%2C%22customcolor%22%3A%22%231abc9c%22%2C%22customtxtcolor%22%3A%22%233d3d3d%22%7D%2C%7B%22label%22%3A%22Location%22%2C%22value%22%3A%2270%22%2C%22color%22%3A%22custom%22%2C%22customcolor%22%3A%22%231abc9c%22%2C%22customtxtcolor%22%3A%22%233d3d3d%22%7D%2C%7B%22label%22%3A%22Client%22%2C%22value%22%3A%2280%22%2C%22color%22%3A%22custom%22%2C%22customcolor%22%3A%22%231abc9c%22%2C%22customtxtcolor%22%3A%22%233d3d3d%22%7D%5D" options="striped,animated" units="$"][/vc_column][vc_column width="1/2"][vc_progress_bar values="%5B%7B%22label%22%3A%22Development%22%2C%22value%22%3A%2295%22%2C%22color%22%3A%22custom%22%2C%22customcolor%22%3A%22%23f5ca59%22%2C%22customtxtcolor%22%3A%22%233d3d3d%22%7D%2C%7B%22label%22%3A%22Design%22%2C%22value%22%3A%2280%22%2C%22color%22%3A%22custom%22%2C%22customcolor%22%3A%22%23f5ca59%22%2C%22customtxtcolor%22%3A%22%233a3a3a%22%7D%2C%7B%22label%22%3A%22Marketing%22%2C%22value%22%3A%2270%22%2C%22color%22%3A%22custom%22%2C%22customcolor%22%3A%22%23f5ca59%22%2C%22customtxtcolor%22%3A%22%233d3d3d%22%7D%2C%7B%22label%22%3A%22Print%22%2C%22value%22%3A%2280%22%2C%22color%22%3A%22custom%22%2C%22customcolor%22%3A%22%23f5ca59%22%2C%22customtxtcolor%22%3A%22%233d3d3d%22%7D%2C%7B%22label%22%3A%22Print%22%2C%22value%22%3A%2280%22%2C%22color%22%3A%22custom%22%2C%22customcolor%22%3A%22%23f5ca59%22%2C%22customtxtcolor%22%3A%22%233d3d3d%22%7D%2C%7B%22label%22%3A%22Social%22%2C%22value%22%3A%2260%22%2C%22color%22%3A%22custom%22%2C%22customcolor%22%3A%22%23f5ca59%22%2C%22customtxtcolor%22%3A%22%233d3d3d%22%7D%5D" units="POINTS"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Pricing - Style 4', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['pricing'];
$data['custom_class'] = 'pricing';
$data['image_path'] = $skudo_get_directory .'images/skudo-127.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="no_bg" css=".vc_custom_1407253942746{margin-bottom: -35px !important;padding-top: 70px !important;padding-bottom: 70px !important;}" animation_type="h" horizontal_animation="left-animation" vertical_animation="top-animation" disable_on_mobile="disable_on_mobile_value"][vc_column][ult_animation_block animation="pulse" animation_duration="0.5" animation_delay="0.5" animation_iteration_count="1"][vc_custom_heading text="STYLE 4" font_container="tag:h3|font_size:30px|text_align:center" use_theme_fonts="yes"][vc_empty_space height="10px"][vc_separator color="custom" border_width="4" el_width="10" accent_color="__USE_THEME_MAIN_COLOR__"][vc_empty_space height="60px"][/ult_animation_block][vc_row_inner css=".vc_custom_1407309365732{padding-top: 20px !important;padding-bottom: 30px !important;}"][vc_column_inner width="1/3"][ult_animation_block animation="pulse" animation_duration="0.5" animation_delay="0.5" animation_iteration_count="1"][ultimate_pricing design_style="design05" color_scheme="custom" color_bg_main="#f7f7f7" color_bg_highlight="#1aa38a" package_heading="DESIGNING" package_sub_heading="All Designs" package_price="$8" package_unit="per design" package_btn_text="HIRE NOW"]</p>
<ul style="text-align: center">
<li>Creative Design Enabled</li>
<li>Vibrant Color Usage</li>
<li>Eye Catching Design</li>
<li>Extreme Typography</li>
<li>Exceptional Design</li>
</ul>
<p>[/ultimate_pricing][/ult_animation_block][/vc_column_inner][vc_column_inner width="1/3"][ult_animation_block animation="pulse" animation_duration="0.5" animation_delay="0.6" animation_iteration_count="1"][ultimate_pricing design_style="design05" color_scheme="custom" color_bg_highlight="#0ea36a" package_heading="DEVELOPMENT" package_sub_heading="Wordpress Projects " package_price="$20" package_unit="per project" package_btn_text="HIRE NOW" package_featured="enable"]</p>
<ul style="text-align: center">
<li>Highly Responsive in Nature</li>
<li>Quick Development</li>
<li>Bug Free Projects</li>
<li>On Time Resolution</li>
<li>Code Optimization</li>
</ul>
<p>[/ultimate_pricing][/ult_animation_block][/vc_column_inner][vc_column_inner width="1/3"][ult_animation_block animation="pulse" animation_duration="0.5" animation_delay="0.7" animation_iteration_count="1"][ultimate_pricing design_style="design05" color_scheme="custom" color_bg_highlight="#1aa38a" package_heading="TESTING" package_sub_heading="All Web Products" package_price="$12" package_unit="per web products" package_btn_text="HIRE NOW"]</p>
<ul style="text-align: center">
<li>Multiply the Productivity</li>
<li>Increases Performance</li>
<li>Enables the Security</li>
<li>Deep Code Clearance</li>
<li>Light Weight</li>
</ul>
<p>[/ultimate_pricing][/ult_animation_block][ult_animation_block animation="pulse" animation_duration="0.5" animation_delay="0.8" animation_iteration_count="1"][/ult_animation_block][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Pricing - Style 3', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['pricing'];
$data['custom_class'] = 'pricing';
$data['image_path'] = $skudo_get_directory .'images/skudo-126.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="no_bg" css=".vc_custom_1407253942746{margin-bottom: -35px !important;padding-top: 70px !important;padding-bottom: 70px !important;}" animation_type="h" horizontal_animation="left-animation" vertical_animation="top-animation" disable_on_mobile="disable_on_mobile_value"][vc_column][ult_animation_block animation="pulse" animation_duration="0.5" animation_delay="0.5" animation_iteration_count="1"][vc_custom_heading text="STYLE 2" font_container="tag:h3|font_size:30px|text_align:center" use_theme_fonts="yes"][vc_empty_space height="10px"][vc_separator color="custom" border_width="4" el_width="10" accent_color="__USE_THEME_MAIN_COLOR__"][vc_empty_space height="30px"][/ult_animation_block][vc_row_inner css=".vc_custom_1407309365732{padding-top: 20px !important;padding-bottom: 30px !important;}"][vc_column_inner width="1/3"][ult_animation_block animation="pulse" animation_duration="0.5" animation_delay="0.5" animation_iteration_count="1"][ultimate_pricing design_style="design02" color_scheme="custom" color_bg_highlight="#63b5da" package_heading="SILVER PLAN" package_sub_heading="All you need is to start now" package_price="$35" package_unit="Per Month" package_btn_text="BUY NOW"]</p>
<ul style="text-align: center">
<li>32 GB storage</li>
<li>Free Maintenance</li>
<li style="text-decoration: line-through">Fully SEO Featured</li>
<li>Unlimited Data Transfer</li>
<li>Easy Payment</li>
<li>24/7 Support</li>
<li>Firewall Protection</li>
<li style="text-decoration: line-through">Dedicated Environment</li>
<li>Telephonic Support</li>
<li style="text-decoration: line-through">Upgrades On Time</li>
</ul>
<p>[/ultimate_pricing][/ult_animation_block][/vc_column_inner][vc_column_inner width="1/3"][ult_animation_block animation="pulse" animation_duration="0.5" animation_delay="0.6" animation_iteration_count="1"][ultimate_pricing design_style="design02" color_scheme="custom" color_bg_highlight="#54a1d8" package_heading="GOLD PLAN" package_sub_heading="Grow your business from now" package_price="$50" package_unit="Per Month" package_btn_text="BUY NOW"]</p>
<ul style="text-align: center">
<li>120 GB Storage</li>
<li>Free Maintenance</li>
<li>Fully SEO Featured</li>
<li>Unlimited Data Transfer</li>
<li>Easy Payment</li>
<li>24/7 Support</li>
<li>Firewall Protection</li>
<li>Dedicated Environment</li>
<li>Telephonic Support</li>
<li style="text-decoration: line-through">Upgrades On Time</li>
</ul>
<p>[/ultimate_pricing][/ult_animation_block][/vc_column_inner][vc_column_inner width="1/3"][ult_animation_block animation="pulse" animation_duration="0.5" animation_delay="0.7" animation_iteration_count="1"][ultimate_pricing design_style="design02" color_scheme="custom" color_bg_highlight="#63b5da" package_heading="PLATINUM PLAN" package_sub_heading="Scale your business now" package_price="$120" package_unit="Per Month" package_btn_text="BUY NOW"]</p>
<ul style="text-align: center">
<li>32 GB storage</li>
<li>Free Maintenance</li>
<li>Fully SEO Featured</li>
<li>Unlimited Data Transfer</li>
<li>Easy Payment</li>
<li>24/7 Support</li>
<li>Firewall Protection</li>
<li>Dedicated Environment</li>
<li>Telephonic Support</li>
<li>Upgrades On Time</li>
</ul>
<p>[/ultimate_pricing][/ult_animation_block][ult_animation_block animation="pulse" animation_duration="0.5" animation_delay="0.8" animation_iteration_count="1"][/ult_animation_block][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Pricing - Style 2', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['pricing'];
$data['custom_class'] = 'pricing';
$data['image_path'] = $skudo_get_directory .'images/skudo-125.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="no_bg" css=".vc_custom_1407253942746{margin-bottom: -35px !important;padding-top: 70px !important;padding-bottom: 70px !important;}" animation_type="h" horizontal_animation="left-animation" vertical_animation="top-animation" disable_on_mobile="disable_on_mobile_value"][vc_column][ult_animation_block animation="pulse" animation_duration="0.5" animation_delay="0.5" animation_iteration_count="1"][vc_custom_heading text="OUR FANTASTIC PRICES" font_container="tag:h3|font_size:30px|text_align:center" use_theme_fonts="yes"][vc_empty_space height="10px"][vc_separator color="custom" border_width="4" el_width="10" accent_color="__USE_THEME_MAIN_COLOR__"][vc_empty_space height="30px"][/ult_animation_block][vc_row_inner css=".vc_custom_1407309365732{padding-top: 20px !important;padding-bottom: 30px !important;}"][vc_column_inner width="1/4"][ult_animation_block animation="pulse" animation_duration="0.5" animation_delay="0.5" animation_iteration_count="1"][ultimate_pricing color_scheme="custom" color_bg_main="#f7f7f7" color_txt_main="#696969" color_bg_highlight="__USE_THEME_MAIN_COLOR__" color_txt_highlight="#ffffff" package_heading="FREE" package_sub_heading="For Beginners" package_price="0$" package_unit="Per Month" package_btn_text="SIGN UP" package_name_font_family="font_family:Montserrat|font_call:Montserrat|variant:700" package_name_font_style="font-weight:700;" package_name_font_size="desktop:22px;" price_font_family="font_family:Montserrat|font_call:Montserrat|variant:700" price_font_style="font-weight:700;" price_font_size="desktop:34px;"]</p>
<ul>
<li>10 Products</li>
<li>1 Design</li>
<li>1 GB Space</li>
<li>No Support</li>
</ul>
<p>[/ultimate_pricing][/ult_animation_block][/vc_column_inner][vc_column_inner width="1/4"][ult_animation_block animation="pulse" animation_duration="0.5" animation_delay="0.6" animation_iteration_count="1"][ultimate_pricing color_scheme="custom" color_bg_main="#f7f7f7" color_txt_main="#696969" color_bg_highlight="__USE_THEME_MAIN_COLOR__" color_txt_highlight="#ffffff" package_heading="BASIC" package_sub_heading="For Pro" package_price="5$" package_unit="Per Month" package_btn_text="SIGN UP" package_name_font_family="font_family:Montserrat|font_call:Montserrat|variant:700" package_name_font_style="font-weight:700;" price_font_family="font_family:Montserrat|font_call:Montserrat|variant:700" price_font_style="font-weight:700;" price_font_size="desktop:34px;" price_unit_font_family="font_family:|font_call:" price_unit_font_style="font-weight:700;" package_name_font_size="desktop:22px;"]</p>
<ul>
<li>50 Products</li>
<li>3 Design</li>
<li>3 GB Space</li>
<li>Email Support</li>
</ul>
<p>[/ultimate_pricing][/ult_animation_block][/vc_column_inner][vc_column_inner width="1/4"][ult_animation_block animation="pulse" animation_duration="0.5" animation_delay="0.7" animation_iteration_count="1"][ultimate_pricing color_scheme="custom" color_bg_main="#f7f7f7" color_txt_main="#696969" color_bg_highlight="#0b9ccc" color_txt_highlight="#ffffff" package_heading="ADVANCED" package_sub_heading="For Pro" package_price="10$" package_unit="Per Month" package_btn_text="SIGN UP" package_name_font_family="font_family:Montserrat|font_call:Montserrat|variant:700" package_name_font_style="font-weight:700;" price_font_family="font_family:Montserrat|font_call:Montserrat|variant:700" price_font_style="font-weight:700;" price_font_size="desktop:34px;" package_name_font_size="desktop:22px;"]</p>
<ul>
<li>50 Products</li>
<li>3 Design</li>
<li>3 GB Space</li>
<li>Email Support</li>
</ul>
<p>[/ultimate_pricing][/ult_animation_block][/vc_column_inner][vc_column_inner width="1/4"][ult_animation_block animation="pulse" animation_duration="0.5" animation_delay="0.8" animation_iteration_count="1"][ultimate_pricing color_scheme="custom" color_bg_main="#f7f7f7" color_txt_main="#696969" color_bg_highlight="__USE_THEME_MAIN_COLOR__" color_txt_highlight="#ffffff" package_heading="PREMIUM" package_sub_heading="For Pro" package_price="25$" package_unit="Per Month" package_btn_text="SIGN UP" package_name_font_family="font_family:Montserrat|font_call:Montserrat|variant:700" package_name_font_style="font-weight:700;" price_unit_font_family="font_family:|font_call:" price_unit_font_style="font-weight:700;" price_font_family="font_family:Montserrat|font_call:Montserrat|variant:700" price_font_style="font-weight:700;" price_font_size="desktop:34px;" package_name_font_size="desktop:22px;"]</p>
<ul>
<li>500 Products</li>
<li>20 Version</li>
<li>15 GB Space</li>
<li>24/7 Support</li>
</ul>
<p>[/ultimate_pricing][/ult_animation_block][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Text Block + Info Circle', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['services'];
$data['custom_class'] = 'services';
$data['image_path'] = $skudo_get_directory .'images/skudo-124.jpg'; 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1463690976700{margin-top: 80px !important;}"][vc_column width="1/2"][vc_empty_space height="50px"][vc_column_text css=".vc_custom_1463690833706{padding-top: 80px !important;padding-bottom: 50px !important;}"]</p>
<h2>Our awesome team!</h2>
<p>[/vc_column_text][vc_column_text]</p>
<p style="text-align: left">Authoritatively facilitate interdependent paradigms before parallel. Dynamically incubate extensible technology and economically sound alignments. Conveniently actualize B2C innovation through cost before effective deliverables. Dynamically incubate extensible technology and economically sound alignments</p>
<p>[/vc_column_text][/vc_column][vc_column width="1/2" css=".vc_custom_1462380079249{padding-bottom: 80px !important;}"][info_circle edge_radius="150" start_degree="90" eg_padding="60" icon_size="32" icon_show="not-show" content_bg="#1abc9c" content_color="#ffffff" eg_br_style="solid" eg_br_width="2" eg_border_color="#ededed" cn_br_style="solid" cn_br_width="10" cn_border_color="#f4f4f4" auto_slide="on" auto_slide_duration="5" highlight_style="info-circle-pulse" icon_launch="easeOutElastic" icon_launch_duration="1" icon_launch_delay="0.2" responsive_breakpoint="800"][info_circle_item info_title="Brand New Features" info_icon="Defaults-home" icon_bg_color="#c16e8a" icon_color="#ffffff"]Competently transform proactive internal or "organic".[/info_circle_item][info_circle_item info_title="Done Awesomely" info_icon="Defaults-headphones" icon_bg_color="#fcea5f" icon_color="#ffffff"]Quicquam fratrum declivia gravitate. Nam coegit alto unda.[/info_circle_item][info_circle_item info_title="100% Mobile Ready" info_icon="Defaults-cogs gears" icon_bg_color="#3685c1" icon_color="#ffffff"]Pumero divino toto prima ensis. Cingebant uno pluvialibus.[/info_circle_item][info_circle_item info_title="Award Winning" info_icon="Defaults-group users" icon_bg_color="#ce4c4c" icon_color="#ffffff"]Nitidis locum auroram dissaepserat ulla dextra rapidisque.[/info_circle_item][info_circle_item info_title="New Technology " info_icon="Defaults-flask" icon_bg_color="#84566e" icon_color="#ffffff"]Phosfluorescently redefine plug-and-play best practices.[/info_circle_item][info_circle_item info_title="Ultimate Solution" info_icon="Defaults-umbrella" icon_bg_color="#4dc665" icon_color="#ffffff"]Nam coegit alto unda austro liberioris effigiem?[/info_circle_item][/info_circle][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Services 3 Col Icon Right', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['services'];
$data['custom_class'] = 'services';
$data['image_path'] = $skudo_get_directory .'images/skudo-123.jpg'; 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1462203830473{padding-top: 40px !important;padding-bottom: 40px !important;}"][vc_column][vc_empty_space height="80px"][vc_custom_heading text="INFO BOX | RIGHT ICON" font_container="tag:h2|font_size:18px|text_align:center" use_theme_fonts="yes"][vc_empty_space height="15px"][/vc_column][/vc_row][vc_row css=".vc_custom_1462371330185{padding-top: 40px !important;padding-bottom: 50px !important;}"][vc_column width="1/3"][bsf-info-box icon="linearicons-panorama" icon_size="40" icon_color="#101010" title="Simple Icon at top" pos="right"]Dramatically myocardinate generate functionalized channels unique methodologies.[/bsf-info-box][/vc_column][vc_column width="1/3"][bsf-info-box icon="linearicons-bench-press" icon_size="40" icon_color="#101010" title="Simple Icon at top" pos="right"]Dramatically myocardinate generate functionalized channels unique methodologies.[/bsf-info-box][/vc_column][vc_column width="1/3"][bsf-info-box icon="linearicons-chef" icon_size="23" icon_color="#ffffff" icon_style="square" icon_color_bg="#101010" title="Circle Icon at top" pos="right"]Dramatically myocardinate generate functionalized channels unique methodologies.[/bsf-info-box][/vc_column][/vc_row][vc_row css=".vc_custom_1462371330185{padding-top: 40px !important;padding-bottom: 50px !important;}"][vc_column width="1/3"][bsf-info-box icon="linearicons-star-half" icon_size="40" icon_color="#101010" title="Simple Icon at top" pos="heading-right"]Dramatically myocardinate generate functionalized channels unique methodologies.[/bsf-info-box][/vc_column][vc_column width="1/3"][bsf-info-box icon="linearicons-bucket" icon_size="40" icon_color="#101010" title="Simple Icon at top" pos="heading-right"]Dramatically myocardinate generate functionalized channels unique methodologies.[/bsf-info-box][/vc_column][vc_column width="1/3"][bsf-info-box icon="linearicons-knife" icon_size="23" icon_color="#ffffff" icon_style="circle" icon_color_bg="#101010" title="Circle Icon at top" pos="heading-right"]Dramatically myocardinate generate functionalized channels unique methodologies.[/bsf-info-box][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Text Block with Media Grid', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-122.jpg'; 
$data['content'] = <<<CONTENT
[vc_row][vc_column width="1/2"][vc_custom_heading text="Media Grid" use_theme_fonts="yes" el_class="no-letter-spacing"][vc_custom_heading text="Simple Fade With Icon" font_container="tag:h4|text_align:left" use_theme_fonts="yes" el_class="no-letter-spacing"][vc_empty_space height="20px"][vc_column_text css_animation="left-to-right"]Enthusiastically benchmark excellent e-tailers with compelling convergence. Uniquely underwhelm sustainable materials without top-line deliverables. Dramatically iterate efficient content and functionalized bandwidth. Compellingly revolutionize efficient e-tailers without interdependent e-tailers.[/vc_column_text][vc_column_text css_animation="left-to-right"]Enthusiastically benchmark excellent e-tailers with compelling convergence. Uniquely underwhelm sustainable materials without top-line deliverables.[/vc_column_text][/vc_column][vc_column width="1/2"][vc_empty_space height="10px"][vc_media_grid element_width="3" item="mediaGrid_FadeInWithIcon" initial_loading_animation="slideInRight" grid_id="vc_gid:1532104649209-abde0b29-310c-3" include="10426,10440,10433,10439,10434,10421,10431,10429"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Labeled Contact Form + Image', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['contactforms'];
$data['custom_class'] = 'contactforms';
$data['image_path'] = $skudo_get_directory .'images/skudo-121.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="image" parallax_style="vcpb-vz-jquery" bg_image_new="id^10946|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/revslider/home3/slide-business38.jpg|caption^null|alt^null|title^slide-business38.jpg|description^null" bg_image_repeat="no-repeat" bg_override="ex-full" enable_overlay="enable_overlay_value" overlay_color="rgba(0,0,0,0.55)" css=".vc_custom_1548350035656{margin-bottom: 80px !important;padding-top: 80px !important;padding-bottom: 80px !important;}"][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_custom_heading text="SUBSCRIBE FORM" font_container="tag:h5|text_align:center|color:%23ffffff" use_theme_fonts="yes"][vc_empty_space height="40px"][contact-form-7 id="8893"][/vc_column][vc_column width="1/4"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Simple Contact Form + Captcha', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['contactforms'];
$data['custom_class'] = 'contactforms';
$data['image_path'] = $skudo_get_directory .'images/skudo-120.jpg'; 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1463675247955{margin-top: 80px !important;margin-bottom: 80px !important;}"][vc_column][vc_custom_heading text="SIMPLE CONTACT FORM + CAPTCHA" font_container="tag:h5|text_align:center" use_theme_fonts="yes"][vc_empty_space height="40px"][contact-form-7 id="767"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Animated Text', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-119.jpg'; 
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" full_height="yes" content_placement="middle" parallax_content="parallax_content_value" parallax_content_sense="60" fadeout_row="fadeout_row_value" fadeout_start_effect="70" r_border="#333333" css=".vc_custom_1493044956459{background-color: #000000 !important;}"][vc_column][ultimate_fancytext strings_textspeed="35" strings_backspeed="0" typewriter_cursor="off" strings_color="#ffffff" fancytext_loop="true" fancytext_cursor="off" fancytext_strings="Bonjour
Salut
Aloha
Namaste
Guten Tag
Heus
Привет
¡Hola!
Servus
मंडळी...^1000 नमस्कार!" strings_font_family="font_family:Montserrat|font_call:Montserrat" strings_font_size="desktop:60px;" fancytext_cursor_text="|" ticker_effect="dissolve" fancytext_color="#ffffff"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);


$data = array();
$data['name'] = __( 'Team 4 Col (Advanced Carousel)', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['team'];
$data['custom_class'] = 'team';
$data['image_path'] = $skudo_get_directory .'images/skudo-118.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="no_bg" seperator_enable="seperator_enable_value" seperator_type="xlarge_triangle_seperator" seperator_position="top_seperator" seperator_svg_height="60" seperator_shape_background="#ffffff" icon_type="no_icon" css=".vc_custom_1413376297134{margin-bottom: 0px !important;padding-top: 80px !important;padding-bottom: 80px !important;}"][vc_column][ultimate_heading main_heading="ULTIMATE TEAM" main_heading_color="#2e2e2e" spacer="line_with_icon" spacer_position="middle" line_style="double" line_height="4" line_color="#eeeeee" icon="linearicons-archery" icon_size="32" main_heading_font_family="font_family:Dosis|font_call:Dosis|variant:300" main_heading_style="font-weight:300;" sub_heading_font_family="font_family:Raleway|font_call:Raleway" spacer_margin="margin-top:20px;margin-bottom:20px;" line_width="250" main_heading_font_size="desktop:25px;" sub_heading_line_height="desktop:23px;"]Proin eget tortor risus. Donec sollicitudin molestie malesuada.
Donec sollicitudin molestie malesuada.[/ultimate_heading][vc_empty_space height="100px"][ultimate_carousel slides_on_desk="4" autoplay="off" arrows="off" dots_color="#565656" dots_icon="ultsl-radio-unchecked"][bsf-info-box icon_type="custom" icon_img="id^9645|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/team-grid3-1.jpg|caption^null|alt^null|title^team-grid3|description^null" img_width="180" title="Lissa Smith" pos="top" title_font="font_family:Raleway|font_call:Raleway|variant:600" title_font_style="font-weight:600;" desc_font="font_family:Raleway|font_call:Raleway" desc_font_size="desktop:14px;" e="20" title_font_color="#2e2e2e" desc_font_color="#777777"]Vestibulum ac diam sit amet
vehicula plementum sed.[/bsf-info-box][bsf-info-box icon_type="custom" icon_img="id^9646|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/team-grid4-1.jpg|caption^null|alt^null|title^team-grid4|description^null" img_width="180" title="Johnthan Smith" pos="top" title_font="font_family:Raleway|font_call:Raleway|variant:600" title_font_style="font-weight:600;" desc_font="font_family:Raleway|font_call:Raleway" title_font_size="desktop:20px;" desc_font_size="desktop:14px;" title_font_color="#2e2e2e" desc_font_color="#777777"]Vestibulum ac diam sit amet
vehicula plementum sed.[/bsf-info-box][bsf-info-box icon_type="custom" icon_img="id^9648|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/team-grid6-1.jpg|caption^null|alt^null|title^team-grid6|description^null" img_width="180" title="Jonh Doe" pos="top" title_font="font_family:Raleway|font_call:Raleway|variant:600" title_font_style="font-weight:600;" desc_font="font_family:Raleway|font_call:Raleway" title_font_size="desktop:20px;" desc_font_size="desktop:14px;" title_font_color="#2e2e2e" desc_font_color="#777777"]Vestibulum ac diam sit amet
vehicula plementum sed.[/bsf-info-box][bsf-info-box icon_type="custom" icon_img="id^9644|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/team-grid2-1.jpg|caption^null|alt^null|title^team-grid2|description^null" img_width="180" title="Jack Mason" pos="top" title_font="font_family:Raleway|font_call:Raleway|variant:600" title_font_style="font-weight:600;" desc_font="font_family:Raleway|font_call:Raleway" title_font_size="desktop:20px;" desc_font_size="desktop:14px;" title_font_color="#2e2e2e" desc_font_color="#777777"]Vestibulum ac diam sit amet
vehicula plementum sed.[/bsf-info-box][bsf-info-box icon_type="custom" icon_img="id^9643|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/team-grid1-1.jpg|caption^null|alt^null|title^team-grid1|description^null" img_width="180" title="Joana Maria" pos="top" title_font="font_family:Raleway|font_call:Raleway|variant:600" title_font_style="font-weight:600;" desc_font="font_family:Raleway|font_call:Raleway" title_font_size="desktop:20px;" desc_font_size="desktop:14px;" title_font_color="#2e2e2e" desc_font_color="#777777"]Vestibulum ac diam sit amet
vehicula plementum sed.[/bsf-info-box][/ultimate_carousel][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);


$data = array();
$data['name'] = __( 'Single Vertical Tabs', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['verticalstabsicon'];
$data['custom_class'] = 'verticalstabsicon';
$data['image_path'] = $skudo_get_directory .'images/skudo-117.jpg'; 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1492971229746{padding-top: 140px !important;}"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_custom_heading text="VERTICAL TABS" font_container="tag:h2|text_align:center" use_theme_fonts="yes"][vc_empty_space height="60px"][vc_tta_tour style="outline" shape="square" active_section="1" no_fill_content_area="true"][vc_tta_section title="Section 1" tab_id="1462195887183-92db7b67-5c5c"][vc_column_text]I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Dramatically synergize user friendly mindshare before wireless applications. Completely maintain open-source functionalities for multimedia based models. Professionally optimize parallel convergence after 24/365 "outside the box" thinking. Uniquely leverage other's ubiquitous.[/vc_column_text][/vc_tta_section][vc_tta_section title="Section 2" tab_id="1462195887270-32ae4325-576d"][vc_column_text]I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.[/vc_column_text][/vc_tta_section][/vc_tta_tour][ultimate_spacer height="80" height_on_mob_landscape="40" height_on_mob="40"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Single Horizontal Tabs', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['verticalstabsicon'];
$data['custom_class'] = 'verticalstabsicon';
$data['image_path'] = $skudo_get_directory .'images/skudo-116.jpg'; 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1492970861223{padding-top: 140px !important;}"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_custom_heading text="HORIZONTAL TABS" font_container="tag:h2|text_align:center" use_theme_fonts="yes"][vc_empty_space height="60px"][vc_tta_tabs style="outline" shape="square" active_section="1"][vc_tta_section title="Tab 1" tab_id="1462195858534-92d10f27-784b"][vc_column_text]Dramatically visualize mission-critical manufactured products rather than extensible e-commerce. Progressively incentivize cross-unit value whereas competitive applications. Progressively maintain vertical results after focused mindshare. Dynamically exploit web-enabled synergy rather than transparent portals. Credibly benchmark top-line infomediaries before exceptional processes.</p>
<p>Globally cultivate tactical collaboration and idea-sharing after fully tested strategic theme areas. Enthusiastically.[/vc_column_text][vc_column_text]I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.[/vc_column_text][/vc_tta_section][vc_tta_section title="Tab 2" tab_id="1462195858627-2e951b45-4d83"][vc_column_text]Dramatically synergize user friendly mindshare before wireless applications. Completely maintain open-source functionalities for multimedia based models. Professionally optimize parallel convergence after 24/365 "outside the box" thinking. Uniquely leverage other's ubiquitous.[/vc_column_text][/vc_tta_section][/vc_tta_tabs][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Single Accordion', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['verticalstabsicon'];
$data['custom_class'] = 'verticalstabsicon';
$data['image_path'] = $skudo_get_directory .'images/skudo-115.jpg'; 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1492971017336{padding-top: 120px !important;}"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_custom_heading text="ACCORDION" font_container="tag:h2|text_align:center" use_theme_fonts="yes"][vc_empty_space height="60px"][vc_tta_accordion active_section="1"][vc_tta_section title="Energistically initiate viral sources" tab_id="1462039446254-a71612d9-2b19"][vc_row_inner][vc_column_inner][vc_column_text]Dramatically visualize mission-critical manufactured products rather than extensible e-commerce. Progressively incentivize cross-unit value whereas competitive applications. Progressively maintain vertical results after focused mindshare. Dynamically exploit web-enabled synergy rather than transparent portals. Credibly benchmark top-line infomediaries before exceptional processes.

Globally cultivate tactical collaboration and idea-sharing after fully tested strategic theme areas. Enthusiastically.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Objectively administrate leveraged services " tab_id="1462039446331-e7bbf359-6158"][vc_column_text]I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.[/vc_column_text][/vc_tta_section][vc_tta_section title="Conveniently reinvent " tab_id="1463610695891-082b0cba-747b"][vc_column_text]Dramatically visualize mission-critical manufactured products rather than extensible e-commerce.

Globally cultivate tactical collaboration and idea-sharing after fully tested strategic theme areas. Enthusiastically.[/vc_column_text][/vc_tta_section][/vc_tta_accordion][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);


$data = array();
$data['name'] = __( 'Team 3 Columns (Fixed)', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['team'];
$data['custom_class'] = 'team';
$data['image_path'] = $skudo_get_directory .'images/skudo-114.jpg'; 
$data['content'] = <<<CONTENT
[vc_row equal_height="yes" content_placement="top" bg_type="bg_color" seperator_enable="seperator_enable_value" seperator_type="xlarge_triangle_left_seperator" seperator_position="top_bottom_seperator" seperator_svg_height="80" seperator_shape_background="#ffffff" bg_color_value="#ffffff" css=".vc_custom_1528469306826{padding-top: 50px !important;padding-bottom: 100px !important;}"][vc_column width="1/3"][ult_team team_img_grayscale="off" img_hover_eft="" social_icon_effect="on" social_links="%5B%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-xing-square%22%2C%22social_icon_hover_color%22%3A%22__USE_THEME_MAIN_COLOR__%22%7D%2C%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-twitter-square%22%2C%22social_icon_hover_color%22%3A%22__USE_THEME_MAIN_COLOR__%22%7D%2C%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-behance-square%22%2C%22social_icon_hover_color%22%3A%22__USE_THEME_MAIN_COLOR__%22%7D%5D" divider_effect="" title_text_typography="" team_member_name_font="font_family:Poppins|font_call:Poppins|variant:500" team_member_name_font_style="font-weight:500;" team_member_position_font="font_family:Poppins|font_call:Poppins|variant:600" team_member_position_font_style="font-weight:600;" image="id^9646|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/team-grid4-1.jpg|caption^null|alt^null|title^team-grid4|description^null" name="Nina Soraia" pos_in_org="Finances" title_box_padding="padding:10px;" team_member_name_font_size="desktop:26px;" team_member_position_font_size="desktop:14px;"][/ult_team][/vc_column][vc_column width="1/3"][ult_team team_img_grayscale="off" img_hover_eft="" social_icon_effect="on" social_links="%5B%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-pinterest-square%22%2C%22social_icon_hover_color%22%3A%22__USE_THEME_MAIN_COLOR__%22%7D%2C%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-vimeo-square%22%2C%22social_icon_hover_color%22%3A%22__USE_THEME_MAIN_COLOR__%22%7D%2C%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-pied-piper%22%2C%22social_icon_hover_color%22%3A%22__USE_THEME_MAIN_COLOR__%22%7D%5D" divider_effect="" title_text_typography="" team_member_name_font="font_family:Poppins|font_call:Poppins|variant:500" team_member_name_font_style="font-weight:500;" team_member_position_font="font_family:Poppins|font_call:Poppins|variant:600" team_member_position_font_style="font-weight:600;" team_member_org_color="rgba(0,0,0,0.25)" image="id^9647|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/team-grid5-1.jpg|caption^null|alt^null|title^team-grid5|description^null" name="Joana Doe" pos_in_org="Public Relations" title_box_padding="padding:10px;" team_member_name_font_size="desktop:26px;" team_member_position_font_size="desktop:14px;"][/ult_team][/vc_column][vc_column width="1/3"][ult_team team_img_grayscale="off" img_hover_eft="" social_icon_effect="on" social_links="%5B%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-youtube-square%22%2C%22social_icon_hover_color%22%3A%22__USE_THEME_MAIN_COLOR__%22%7D%2C%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-foursquare%22%2C%22social_icon_hover_color%22%3A%22__USE_THEME_MAIN_COLOR__%22%7D%2C%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-maxcdn%22%2C%22social_icon_hover_color%22%3A%22__USE_THEME_MAIN_COLOR__%22%7D%5D" divider_effect="" title_text_typography="" team_member_name_font="font_family:Poppins|font_call:Poppins|variant:500" team_member_name_font_style="font-weight:500;" team_member_position_font="font_family:Poppins|font_call:Poppins|variant:600" team_member_position_font_style="font-weight:600;" team_member_org_color="rgba(0,0,0,0.25)" image="id^9648|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/team-grid6-1.jpg|caption^null|alt^null|title^team-grid6|description^null" name="Manuel Politiama" pos_in_org="Help &amp; Support" title_box_padding="padding:10px;" team_member_name_font_size="desktop:26px;" team_member_position_font_size="desktop:14px;"][/ult_team][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Image with Services (2 Col)', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['services'];
$data['custom_class'] = 'services';
$data['image_path'] = $skudo_get_directory .'images/skudo-113.jpg'; 
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" full_height="yes" equal_height="yes" content_placement="middle" css=".vc_custom_1548350402046{background-image: url(http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2019/01/services-section-new.jpg?id=11103) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column width="1/2"][/vc_column][vc_column width="1/2"][vc_custom_heading text="We love fresh ideas and unique design" font_container="tag:h2|font_size:46px|text_align:left|line_height:1.2em" use_theme_fonts="yes"][vc_empty_space height="40px"][vc_row_inner css=".vc_custom_1463177866784{margin-bottom: 30px !important;}"][vc_column_inner width="1/2"][bsf-info-box icon="linearicons-laptop-phone" icon_size="40" icon_color="#202122" title="Responsive Design" pos="top" el_class="align-icontop-left" title_font="font_family:Quicksand|font_call:Quicksand|variant:500" title_font_style="font-weight:500;" title_font_size="desktop:17px;" title_font_color="#2e2e2e"]Conveniently syndicate flexible strategic theme areas through covalent resources redefine[/bsf-info-box][/vc_column_inner][vc_column_inner width="1/2"][bsf-info-box icon="linearicons-trophy" icon_size="40" icon_color="#202122" title="Visual Page Builder" pos="top" el_class="align-icontop-left" title_font="font_family:Quicksand|font_call:Quicksand|variant:500" title_font_style="font-weight:500;" title_font_size="desktop:17px;" title_font_color="#2e2e2e"]Conveniently syndicate flexible strategic theme areas through covalent resources redefine[/bsf-info-box][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1524690071999{margin-bottom: 30px !important;}"][vc_column_inner width="1/2"][bsf-info-box icon="linearicons-pictures" icon_size="40" icon_color="#202122" title="Unique Design" pos="top" el_class="align-icontop-left" title_font="font_family:Quicksand|font_call:Quicksand|variant:500" title_font_style="font-weight:500;" title_font_size="desktop:17px;" title_font_color="#2e2e2e"]Conveniently syndicate flexible strategic theme areas through covalent resources redefine[/bsf-info-box][/vc_column_inner][vc_column_inner width="1/2"][bsf-info-box icon="linearicons-pencil-ruler2" icon_size="40" icon_color="#202122" title="Custom Page Options" pos="top" el_class="align-icontop-left" title_font="font_family:Quicksand|font_call:Quicksand|variant:500" title_font_style="font-weight:500;" title_font_size="desktop:17px;" title_font_color="#2e2e2e"]Conveniently syndicate flexible strategic theme areas through covalent resources redefine[/bsf-info-box][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);


$data = array();
$data['name'] = __( 'Text with Services + Background', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['services'];
$data['custom_class'] = 'services';
$data['image_path'] = $skudo_get_directory .'images/skudo-112.jpg'; 
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" full_height="yes" equal_height="yes" content_placement="middle" css=".vc_custom_1548350494037{background-image: url(http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2019/01/about5-5.jpg?id=11105) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column width="1/3"][/vc_column][vc_column width="2/3"][vc_custom_heading text="Creative &amp; Inovation" font_container="tag:h2|font_size:46px|text_align:left|line_height:1.2em" use_theme_fonts="yes"][vc_empty_space height="25px"][ultimate_heading alignment="left" main_heading_font_size="desktop:68px;" sub_heading_font_size="desktop:25px;" sub_heading_line_height="desktop:40px;"]Our goal is <span class="playfair-customfont">driven by design</span> to help brands connect <span class="playfair-customfont">on</span> a human level. We specialize in deploying <span class="playfair-customfont">creatively</span> branded, outstanding WebSites, incredible APPs, <span class="playfair-customfont">online advertising</span> and media campaigns.[/ultimate_heading][vc_empty_space height="70px"][vc_row_inner][vc_column_inner width="1/4"][bsf-info-box icon="linearicons-laptop-phone" icon_size="40" icon_color="#202122" title="WEB DESIGN" pos="top" el_class="align-icontop-left" title_font="font_family:Quicksand|font_call:Quicksand|variant:700" title_font_style="font-weight:700;" desc_font="font_family:Montserrat|font_call:Montserrat|variant:500" desc_font_style="font-weight:500;" title_font_size="desktop:14px;" desc_font_size="desktop:13px;"][/bsf-info-box][ultimate_spacer height="0" height_on_mob_landscape="40" height_on_mob="40"][/vc_column_inner][vc_column_inner width="1/4"][bsf-info-box icon="linearicons-smartphone-embed" icon_size="40" icon_color="#202122" title="MOBILE APP" pos="top" el_class="align-icontop-left" title_font="font_family:Quicksand|font_call:Quicksand|variant:700" title_font_style="font-weight:700;" desc_font="font_family:Montserrat|font_call:Montserrat|variant:500" desc_font_style="font-weight:500;" title_font_size="desktop:14px;" desc_font_size="desktop:13px;"][/bsf-info-box][ultimate_spacer height="0" height_on_mob_landscape="40" height_on_mob="40"][/vc_column_inner][vc_column_inner width="1/4"][bsf-info-box icon="linearicons-ship" icon_size="40" icon_color="#202122" title="BRANDS" pos="top" el_class="align-icontop-left" title_font="font_family:Quicksand|font_call:Quicksand|variant:700" title_font_style="font-weight:700;" desc_font="font_family:Montserrat|font_call:Montserrat|variant:500" desc_font_style="font-weight:500;" title_font_size="desktop:14px;" desc_font_size="desktop:13px;"][/bsf-info-box][ultimate_spacer height="0" height_on_mob_landscape="40" height_on_mob="40"][/vc_column_inner][vc_column_inner width="1/4"][bsf-info-box icon="linearicons-graph" icon_size="40" icon_color="#202122" title="MARKETING" pos="top" el_class="align-icontop-left" title_font="font_family:Quicksand|font_call:Quicksand|variant:700" title_font_style="font-weight:700;" desc_font="font_family:Montserrat|font_call:Montserrat|variant:500" desc_font_style="font-weight:500;" title_font_size="desktop:14px;" desc_font_size="desktop:13px;"][/bsf-info-box][ultimate_spacer height="0" height_on_mob_landscape="40" height_on_mob="40"][/vc_column_inner][/vc_row_inner][vc_empty_space height="40px"][vc_btn title="MORE ABOUT US" style="outline-custom" outline_custom_color="#212121" outline_custom_hover_background="#212121" outline_custom_hover_text="#ffffff" shape="square" align="left" css_animation="bounceIn" link="url:%23|||"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Header with Text + Background', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-111.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="image" parallax_style="vcpb-vz-jquery" bg_image_new="id^11106|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2019/01/services4.jpg|caption^null|alt^null|title^services4|description^null" bg_override="ex-full" css=".vc_custom_1548350595255{padding-top: 160px !important;padding-bottom: 160px !important;}"][vc_column width="5/6"][ult_animation_block animation="fadeInUp" animation_duration="1" animation_delay="0.3" animation_iteration_count="1"][ultimate_heading sub_heading_color="__USE_THEME_MAIN_COLOR__" alignment="left" sub_heading_font_family="font_family:Josefin Sans|font_call:Josefin+Sans|variant:300" sub_heading_style="font-weight:300;" sub_heading_font_size="desktop:55px;tablet_portrait:45px;mobile_landscape:35px;mobile:25px;" sub_heading_line_height="desktop:60px;tablet_portrait:50px;mobile_landscape:40px;mobile:30px;"]<span style="color: #f7f7f7;">We design &amp; develop</span><br /><span style="color: #f7f7f7;">creative digital strategies</span><br /><span style="color: #f7f7f7;">with attention to details</span>[/ultimate_heading][vc_empty_space height="25px"][vc_custom_heading text="Specializing Master in Service Design trains specialists in the design<br />
of services for businesses and public-sector organizations." font_container="tag:p|font_size:16px|text_align:left|color:%236d6d6d" use_theme_fonts="yes" el_class="no-letter-spacing"][/ult_animation_block][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);


$data = array();
$data['name'] = __( '3 Columns Counters', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['counters'];
$data['custom_class'] = 'counters';
$data['image_path'] = $skudo_get_directory .'images/skudo-110.jpg';
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1505756626076{padding-top: 120px !important;padding-bottom: 120px !important;}"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_custom_heading text="WHY SKUDO IS BETTER?" font_container="tag:h3|text_align:center" use_theme_fonts="yes"][vc_empty_space height="20px"][vc_column_text]</p>
<p style="text-align: center;">Credibly myocardinate cutting-edge e-tailers with alternative catalysts for enable extensive benefits.</p>
<p>[/vc_column_text][vc_empty_space height="80px"][vc_row_inner][vc_column_inner width="1/3"][vc_pie value="55" color="custom" units="%" custom_color="__USE_THEME_MAIN_COLOR__"][vc_empty_space height="20px"][vc_custom_heading text="MORE CUSTOMIZABLE" font_container="tag:h5|text_align:center" use_theme_fonts="yes"][vc_column_text]</p>
<p style="text-align: center;">Continually incubate functional services whereas.</p>
<p>[/vc_column_text][ultimate_spacer height="0" height_on_mob_landscape="60" height_on_mob="60"][/vc_column_inner][vc_column_inner width="1/3"][vc_pie value="60" color="custom" units="%" custom_color="__USE_THEME_MAIN_COLOR__"][vc_empty_space height="20px"][vc_custom_heading text="MORE FASTER" font_container="tag:h5|text_align:center" use_theme_fonts="yes"][vc_column_text]</p>
<p style="text-align: center;">Continually incubate functional services whereas.</p>
<p>[/vc_column_text][ultimate_spacer height="0" height_on_mob_landscape="60" height_on_mob="60"][/vc_column_inner][vc_column_inner width="1/3"][vc_pie value="85" color="custom" units="%" custom_color="__USE_THEME_MAIN_COLOR__"][vc_empty_space height="20px"][vc_custom_heading text="MORE SECURE" font_container="tag:h5|text_align:center" use_theme_fonts="yes"][vc_column_text]</p>
<p style="text-align: center;">Continually incubate functional services whereas.</p>
<p>[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="280px"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);


$data = array();
$data['name'] = __( 'Text with Background', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-109.jpg'; 
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" bg_type="image" parallax_style="vcpb-default" bg_image_new="id^11107|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2019/01/hom4-1.jpg|caption^null|alt^null|title^hom4-1|description^null" bg_image_repeat="no-repeat" bg_override="ex-full" enable_overlay="enable_overlay_value" overlay_color="rgba(0,0,0,0.58)" css=".vc_custom_1548350660356{padding-top: 180px !important;padding-bottom: 180px !important;}"][vc_column][vc_custom_heading text="WE BELIEVE IN<br />
<b>QUALITY</b> DESIGN" font_container="tag:h2|font_size:46px|text_align:center|color:%23ffffff|line_height:56px" use_theme_fonts="yes"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);


$data = array();
$data['name'] = __( 'Counter with 4 Col (icon at Top)', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['counters'];
$data['custom_class'] = 'counters';
$data['image_path'] = $skudo_get_directory .'images/skudo-108.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="bg_color" bg_override="ex-full" css=".vc_custom_1531218084777{padding-top: 120px !important;padding-bottom: 80px !important;}" bg_color_value="#212121"][vc_column el_class="wide-box-mobile"][ult_animation_block animation="fadeInUp" animation_duration="1" animation_delay="0.3" animation_iteration_count="1"][vc_row_inner][vc_column_inner width="1/4"][stat_counter icon="linearicons-clock2" icon_size="45" icon_color="#ffffff" icon_position="left" counter_title="WORK HOURS" counter_sep="" speed="3" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" counter_color_txt="rgba(255,255,255,0.5)" desc_font="font_family:Poppins|font_call:Poppins|variant:600" desc_font_style="font-weight:600;" font_size_title="12" font_size_counter="58" title_font_size="desktop:11px;" desc_font_size="desktop:30px;" desc_font_color="#ffffff" title_font_line_height="desktop:12px;"][/vc_column_inner][vc_column_inner width="1/4"][stat_counter icon="linearicons-pen-add" icon_size="45" icon_color="#ffffff" icon_position="left" counter_title="FINISHED WORKS" counter_value="340" counter_sep="" speed="3" title_font="font_family:Quicksand|font_call:Quicksand|variant:500" title_font_style="font-weight:500;" counter_color_txt="rgba(255,255,255,0.5)" desc_font="font_family:Poppins|font_call:Poppins|variant:600" desc_font_style="font-weight:600;" font_size_title="12" font_size_counter="58" title_font_size="desktop:11px;" desc_font_size="desktop:30px;" desc_font_color="#ffffff" title_font_line_height="desktop:12px;"][/vc_column_inner][vc_column_inner width="1/4"][stat_counter icon="linearicons-share2" icon_size="45" icon_color="#ffffff" icon_position="left" counter_title="TWITTER FOLLOWERS" counter_value="5430" counter_sep="" speed="3" title_font="font_family:Quicksand|font_call:Quicksand|variant:500" title_font_style="font-weight:500;" counter_color_txt="rgba(255,255,255,0.5)" desc_font="font_family:Poppins|font_call:Poppins|variant:600" desc_font_style="font-weight:600;" font_size_title="12" font_size_counter="58" title_font_size="desktop:11px;" desc_font_size="desktop:30px;" desc_font_color="#ffffff" title_font_line_height="desktop:12px;"][/vc_column_inner][vc_column_inner width="1/4"][stat_counter icon="linearicons-database-lock" icon_size="45" icon_color="#ffffff" icon_position="left" counter_title="DATA STORED" counter_value="18250" counter_sep="" speed="3" title_font="font_family:Quicksand|font_call:Quicksand|variant:500" title_font_style="font-weight:500;" counter_color_txt="rgba(255,255,255,0.5)" desc_font="font_family:Poppins|font_call:Poppins|variant:600" desc_font_style="font-weight:600;" font_size_title="12" font_size_counter="58" title_font_size="desktop:11px;" desc_font_size="desktop:30px;" desc_font_color="#ffffff" title_font_line_height="desktop:12px;"][/vc_column_inner][/vc_row_inner][/ult_animation_block][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);


$data = array();
$data['name'] = __( 'Services with Scroller + Background', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['services'];
$data['custom_class'] = 'services';
$data['image_path'] = $skudo_get_directory .'images/skudo-107.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="image" parallax_style="vcpb-default" bg_image_new="id^11108|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2019/01/parallax1.jpg|caption^null|alt^null|title^parallax1|description^null" bg_image_repeat="no-repeat" bg_override="ex-full" enable_overlay="enable_overlay_value" overlay_color="rgba(0,0,0,0.85)" css=".vc_custom_1548350717978{padding-top: 120px !important;padding-bottom: 120px !important;}"][vc_column][ult_animation_block animation="slideInUp" animation_duration="1" animation_delay="0.2" animation_iteration_count="1"][vc_custom_heading text="WHAT WE DO" font_container="tag:h3|text_align:center|color:%23ffffff" use_theme_fonts="yes"][vc_empty_space height="80px"][ultimate_carousel slides_on_desk="3" slides_on_tabs="2" slides_on_mob="1" speed="600" autoplay="off" arrows="off" dots_color="#a3a3a3" adaptive_height="on" item_space="30"][bsf-info-box icon="linearicons-bucket" icon_size="60" icon_color="__USE_THEME_MAIN_COLOR__" title="PREMIUM DESIGN" read_more="box" link="url:%23|||" pos="top" title_font="font_family:Josefin Sans|font_call:Josefin+Sans|variant:700" title_font_style="font-weight:700;" title_font_size="desktop:14px;" title_font_color="#ffffff" desc_font_color="#7b7b7b"]Energistically productize reliable infrastructures for collaborative supply chains evolve[/bsf-info-box][bsf-info-box icon="linearicons-fire" icon_size="60" icon_color="__USE_THEME_MAIN_COLOR__" title="POWERFUL FRAMEWORK" read_more="box" link="url:%23|||" pos="top" title_font="font_family:Josefin Sans|font_call:Josefin+Sans|variant:700" title_font_style="font-weight:700;" title_font_size="desktop:14px;" title_font_color="#ffffff" desc_font_color="#7b7b7b"]Energistically productize reliable infrastructures for collaborative supply chains evolve customer[/bsf-info-box][bsf-info-box icon="linearicons-laptop-phone" icon_size="60" icon_color="__USE_THEME_MAIN_COLOR__" title="MOBILE FRIENDLY" read_more="box" link="url:%23|||" pos="top" title_font="font_family:Josefin Sans|font_call:Josefin+Sans|variant:700" title_font_style="font-weight:700;" title_font_size="desktop:14px;" title_font_color="#ffffff" desc_font_color="#7b7b7b"]Energistically productize reliable infrastructures for collaborative supply chains evolve customer[/bsf-info-box][bsf-info-box icon="linearicons-gift" icon_size="60" icon_color="__USE_THEME_MAIN_COLOR__" title="PREMIUM RESOURCES" read_more="box" link="url:%23|||" pos="top" title_font="font_family:Josefin Sans|font_call:Josefin+Sans|variant:700" title_font_style="font-weight:700;" title_font_size="desktop:14px;" title_font_color="#ffffff" desc_font_color="#7b7b7b"]Energistically productize reliable infrastructures for collaborative supply chains evolve customer[/bsf-info-box][bsf-info-box icon="linearicons-lifebuoy" icon_size="60" icon_color="__USE_THEME_MAIN_COLOR__" title="FREE SUPPORT &amp; UPDATES" read_more="box" link="url:%23|||" pos="top" title_font="font_family:Josefin Sans|font_call:Josefin+Sans|variant:700" title_font_style="font-weight:700;" title_font_size="desktop:14px;" title_font_color="#ffffff" desc_font_color="#7b7b7b"]Energistically productize reliable infrastructures for collaborative supply chains evolve customer[/bsf-info-box][/ultimate_carousel][/ult_animation_block][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);


$data = array();
$data['name'] = __( 'Testimonial with Scroller', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'testimonials';
$data['image_path'] = $skudo_get_directory .'images/skudo-106.jpg'; 
$data['content'] = <<<CONTENT
[vc_row content_placement="middle" bg_type="bg_color" bg_override="ex-full" css=".vc_custom_1525125729894{padding-top: 100px !important;padding-bottom: 100px !important;}" bg_color_value="#f7f7f7"][vc_column el_class="wide-testimonials-mobile"][ult_animation_block animation="fadeInUp" animation_duration="1" animation_delay="0.3" animation_iteration_count="1"][vc_custom_heading text="OUR CLIENTS SAY" font_container="tag:h3|text_align:center" use_theme_fonts="yes"][vc_empty_space height="40px"][/ult_animation_block][testimonials style_testimonials="style3" des_testimonials_flex_slideshow="no" des_testimonials_flex_animation_duration="1500" des_testimonials_flex_items_desktop="1" des_testimonials_flex_items_small_desktop="1" des_testimonials_flex_items_tablet="1" des_testimonials_flex_items_mobile="1" des_testimonials_flex_direction_nav="no" des_testimonials_flex_height="450" style="style2" testimonials_cats="dark-text" number="5"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Mixed Projects 4 Columns', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'portfolio';
$data['image_path'] = $skudo_get_directory .'images/skudo-105.jpg'; 
$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space][/vc_column][/vc_row][vc_row][vc_column][cubeportfolio id="63"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Mixed Projects 3 Columns', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'portfolio';
$data['image_path'] = $skudo_get_directory .'images/skudo-104.jpg'; 
$data['content'] = <<<CONTENT
[vc_row][vc_column][cubeportfolio id="62"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Mixed Projects 2 Columns', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'portfolio';
$data['image_path'] = $skudo_get_directory .'images/skudo-103.jpg'; 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1493478981884{margin-top: -38px !important;}"][vc_column][cubeportfolio id="34"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Header with Title + Video', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-102.jpg'; 
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" bg_type="u_iframe" u_video_url="https://www.youtube.com/watch?v=Yt6wQwbtKrI" video_opts="loop,muted" video_poster="id^10376|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/06/place-holder-video.jpg|caption^null|alt^null|title^place-holder-video|description^null" bg_override="ex-full" fadeout_row="fadeout_row_value" enable_overlay="enable_overlay_value" overlay_color="rgba(5,18,48,0.65)" css=".vc_custom_1548350784224{padding-top: 180px !important;padding-bottom: 180px !important;}"][vc_column][ult_animation_block animation="fadeIn" animation_duration="1" animation_delay="0.5" animation_iteration_count="1"][ultimate_heading main_heading_color="#ffffff" sub_heading_color="#ffffff" main_heading_font_family="font_family:Roboto|font_call:Roboto|variant:300" main_heading_style="font-weight:300;" main_heading_font_size="desktop:36px;" sub_heading_font_family="font_family:Roboto|font_call:Roboto|variant:700" sub_heading_style="font-weight:700;" sub_heading_font_size="desktop:60px;mobile:40px;"]GRID PORTFOLIO[/ultimate_heading][/ult_animation_block][ult_animation_block animation="fadeIn" animation_duration="1" animation_delay="1" animation_iteration_count="1"][ultimate_heading main_heading="We Design. We Develop. We Inspire" main_heading_color="#ffffff" sub_heading_color="#ffffff" main_heading_font_family="font_family:Roboto|font_call:Roboto|variant:300" main_heading_style="font-weight:300;" main_heading_font_size="desktop:18px;" sub_heading_font_family="font_family:Roboto|font_call:Roboto|variant:300" sub_heading_style="font-weight:300;" sub_heading_font_size="desktop:100px;" main_heading_margin="margin-top:15px;"][/ultimate_heading][/ult_animation_block][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Grid Ajax 4 Columns', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'portfolio';
$data['image_path'] = $skudo_get_directory .'images/skudo-101.jpg'; 
$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="40px"][cubeportfolio id="57"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Grid Ajax 3 Columns', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'portfolio';
$data['image_path'] = $skudo_get_directory .'images/skudo-100.jpg'; 
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1493482623189{margin-top: -21px !important;}"][vc_column][vc_empty_space height="60px"][cubeportfolio id="56"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Grid Ajax 2 Columns', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'portfolio';
$data['image_path'] = $skudo_get_directory .'images/skudo-99.jpg'; 
$data['content'] = <<<CONTENT
[vc_row][vc_column][ult_animation_block animation="fadeInUp" animation_duration="0.3" animation_delay="0.5" animation_iteration_count="1" opacity_start_effect="80"][vc_empty_space height="60px"][ultimate_heading sub_heading_color="#212121" sub_heading_font_family="font_family:Playfair Display|font_call:Playfair+Display" sub_heading_font_size="desktop:98px;tablet_portrait:70px;mobile_landscape:50px;mobile:35px;" sub_heading_style="font-weight:700;"]Grid &amp; Ajax[/ultimate_heading][vc_row_inner css=".vc_custom_1493996807294{margin-top: 25px !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3" css=".vc_custom_1493996799406{padding-right: 40px !important;padding-left: 40px !important;}"][vc_custom_heading text="Build portfolios has never been so easy! With the live template builder you control every aspects like, type of portfolio, columns, colors, fonts, spacings, borders, etc." font_container="tag:p|font_size:16px|text_align:center|color:%23999ca0" use_theme_fonts="yes"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/ult_animation_block][vc_empty_space height="60px"][/vc_column][/vc_row][vc_row][vc_column][ult_animation_block animation="fadeInUp" animation_duration="1" animation_delay="0.3" animation_iteration_count="1" opacity_start_effect="80"][cubeportfolio id="28"][/ult_animation_block][/vc_column][/vc_row][vc_row][vc_column][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Masonry Portfolio Big Gap', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'portfolio';
$data['image_path'] = $skudo_get_directory .'images/skudo-98.jpg'; 
$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="30px"][/vc_column][/vc_row][vc_row][vc_column][cubeportfolio id="79"][/vc_column][/vc_row][vc_row][vc_column][ultimate_spacer height="80" height_on_mob_landscape="40" height_on_mob="40"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Masonry Portfolio Small Gap', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'portfolio';
$data['image_path'] = $skudo_get_directory .'images/skudo-97.jpg'; 
$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="50px"][/vc_column][/vc_row][vc_row][vc_column][cubeportfolio id="77"][/vc_column][/vc_row][vc_row][vc_column][vc_empty_space height="50px"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Masonry Portfolio no Gap', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'portfolio';
$data['image_path'] = $skudo_get_directory .'images/skudo-96.jpg'; 
$data['content'] = <<<CONTENT
[vc_row][vc_column][ult_animation_block animation="fadeInUp" animation_duration="1" animation_delay="0" animation_iteration_count="1" opacity_start_effect="80"][vc_empty_space height="60px"][ultimate_heading main_heading="Portfolio" heading_tag="h1" alignment="left" main_heading_font_family="font_family:Poppins|font_call:Poppins|variant:600" main_heading_style="font-weight:600;" main_heading_font_size="desktop:50px;mobile_landscape:40px;mobile:35px;"][/ultimate_heading][ultimate_fancytext fancytext_prefix="Our goal is to build amazing" fancytext_align="left" strings_textspeed="35" strings_backspeed="0" typewriter_cursor="off" fancytext_strings=" Website<br />
Brandings<br />
Illustrations<br />
Apps" strings_font_family="font_family:Poppins|font_call:Poppins|variant:500" strings_font_style="font-weight:500;" strings_font_size="desktop:18px;" fancytext_color="#ffffff" ticker_background="__USE_THEME_MAIN_COLOR__" prefsuf_font_family="font_family:Poppins|font_call:Poppins|variant:500" prefsuf_font_style="font-weight:500;" prefix_suffix_font_size="desktop:18px;"][vc_empty_space height="30px"][cubeportfolio id="81"][/ult_animation_block][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Wide Style Big Projects', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'portfolio';
$data['image_path'] = $skudo_get_directory .'images/skudo-95.jpg'; 
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][cubeportfolio id="55"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Wide Style Medium Projects', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'portfolio';
$data['image_path'] = $skudo_get_directory .'images/skudo-94.jpg'; 
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][vc_empty_space height="40px"][cubeportfolio id="54"][/vc_column][/vc_row][vc_row][vc_column][ultimate_spacer height="80" height_on_mob_landscape="40" height_on_mob="40"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Wide Style Small Projects', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'portfolio';
$data['image_path'] = $skudo_get_directory .'images/skudo-93.jpg'; 
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1493475731465{padding-top: 40px !important;}"][vc_column][cubeportfolio id="30"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Title with Partners (+ Dividers)', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-92.jpg'; 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1526227945438{margin-top: 40px !important;margin-bottom: 40px !important;}"][vc_column][ultimate_heading main_heading="Our famous Clients" alignment="left" spacer="line_only" spacer_position="bottom" line_height="3" line_color="__USE_THEME_MAIN_COLOR__" main_heading_font_family="font_family:Poppins|font_call:Poppins|variant:600" main_heading_style="font-weight:600;" main_heading_font_size="desktop:22px;" line_width="80" spacer_margin="margin-top:25px;margin-bottom:25px;"][/ultimate_heading][ultimate_spacer height="20"][partners tooltip="no" scroller="no" number_per_row="3" number="6" inner_border_color="#ededed" partners_cats="dark-logos"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Text 2 Col and Image + Services', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['about'];
$data['custom_class'] = 'about';
$data['image_path'] = $skudo_get_directory .'images/skudo-91.jpg'; 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1528478133835{margin-top: 60px !important;margin-bottom: 40px !important;}"][vc_column width="1/2"][ult_animation_block animation="fadeIn" animation_duration="3" animation_delay="0" animation_iteration_count="1"][ultimate_heading main_heading="About the Agency" alignment="left" spacer="line_only" spacer_position="bottom" line_height="3" line_color="__USE_THEME_MAIN_COLOR__" main_heading_font_family="font_family:Poppins|font_call:Poppins|variant:600" main_heading_style="font-weight:600;" main_heading_font_size="desktop:22px;" line_width="80" spacer_margin="margin-top:25px;margin-bottom:25px;"][/ultimate_heading][vc_column_text]</p>
<p style="text-align: left;">I am text block. Click edit button to change this text ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar</p>
<p>[/vc_column_text][ultimate_spacer height="0" height_on_mob_landscape="40" height_on_mob="40"][/ult_animation_block][/vc_column][vc_column width="1/2"][ult_animation_block animation="fadeIn" animation_duration="3" animation_delay="0" animation_iteration_count="1"][ultimate_heading main_heading="Our Philosophy" alignment="left" spacer="line_only" spacer_position="bottom" line_height="3" line_color="__USE_THEME_MAIN_COLOR__" main_heading_font_family="font_family:Poppins|font_call:Poppins|variant:600" main_heading_style="font-weight:600;" main_heading_font_size="desktop:22px;" line_width="80" spacer_margin="margin-top:25px;margin-bottom:25px;"][/ultimate_heading][vc_column_text]</p>
<p style="text-align: left;">I am text block. Click edit button to change this text ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar</p>
<p>[/vc_column_text][/ult_animation_block][/vc_column][/vc_row][vc_row][vc_column][vc_empty_space height="20px"][vc_single_image image="9126" img_size="full"][vc_empty_space height="20px"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1526227792183{margin-top: 40px !important;}"][vc_column][vc_row_inner][vc_column_inner width="1/2"][bsf-info-box icon="linearicons-linearicons" icon_size="16" icon_color="#ffffff" icon_style="advanced" icon_color_bg="__USE_THEME_MAIN_COLOR__" icon_border_spacing="40" title="Powerfull Admin Panel" pos="left" title_font="font_family:Open Sans|font_call:Open+Sans|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:18px;" title_font_line_height="desktop:32px;"]Appropriately target granular experiences before sustainable disseminate focused after.[/bsf-info-box][/vc_column_inner][vc_column_inner width="1/2"][bsf-info-box icon="linearicons-cable2" icon_size="16" icon_color="#ffffff" icon_style="advanced" icon_color_bg="__USE_THEME_MAIN_COLOR__" icon_border_spacing="40" title="One Click Demo Install" pos="left" title_font="font_family:Open Sans|font_call:Open+Sans|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:18px;" title_font_line_height="desktop:32px;"]Appropriately target granular experiences before sustainable disseminate focused after.[/bsf-info-box][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Slider without Scroller', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['about'];
$data['custom_class'] = 'about';
$data['image_path'] = $skudo_get_directory .'images/skudo-90.jpg'; 
$data['content'] = <<<CONTENT
[vc_row][vc_column][rev_slider_vc alias="about1-slider"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);


$data = array();
$data['name'] = __( 'Blank page', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-89.jpg'; 
$data['content'] = <<<CONTENT
[vc_row full_height="yes" content_placement="middle"][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_icon type="linecons" icon_linecons="vc_li vc_li-sound" color="custom" size="xl" align="center" custom_color="__USE_THEME_MAIN_COLOR__"][vc_custom_heading text="Blank Template" font_container="tag:h1|text_align:center" use_theme_fonts="yes" el_class="no-letter-spacing"][vc_empty_space height="15px"][vc_column_text]</p>
<p style="text-align: center; font-size: 15px;"><span style="color: #a8a8a8;">Without Header and Footer sections, just content. You can use Visual composer on it. Perfect for under construction and coming soon pages, landing pages for products etc. Do what you want. Freedom.</span></p>
<p>[/vc_column_text][vc_empty_space height="50px"][vc_btn title="GO TO HOMEPAGE" style="outline-custom" outline_custom_color="#101010" outline_custom_hover_background="#101010" outline_custom_hover_text="#ffffff" shape="square" size="xs" align="center" link="url:%23|||"][/vc_column][vc_column width="1/4"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Maintenance Page', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-88.jpg'; 
$data['content'] = <<<CONTENT
[vc_row content_placement="middle" bg_type="image" parallax_style="vcpb-vz-jquery" bg_image_new="id^9818|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/slide-business44.jpg|caption^null|alt^null|title^slide-business44|description^null" bg_image_repeat="no-repeat" bg_override="browser_size" enable_overlay="enable_overlay_value" overlay_color="rgba(0,0,0,0.6)"][vc_column width="1/6"][/vc_column][vc_column width="2/3" el_class="max-wide-box"][ult_animation_block animation="fadeInUp" animation_duration="1" animation_delay="0.5" animation_iteration_count="1" opacity_start_effect="100"][vc_custom_heading text="WE'RE IN MAINTENANCE" font_container="tag:h1|text_align:center|color:%23ffffff" use_theme_fonts="yes"][vc_empty_space height="20px"][vc_custom_heading text="Sign up to our Newsletter to stay updated" font_container="tag:h5|text_align:center|color:%23e5e5e5" use_theme_fonts="yes" el_class="no-letter-spacing"][newsletter][vc_empty_space height="50px"][vc_btn title="BACK HOMEPAGE" style="outline-custom" outline_custom_color="" outline_custom_hover_background="__USE_THEME_MAIN_COLOR__" outline_custom_hover_text="#ffffff" shape="round" align="center" link="url:%23|||"][/ult_animation_block][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Complex Contact Form + Background', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['contactforms'];
$data['custom_class'] = 'contactforms';
$data['image_path'] = $skudo_get_directory .'images/skudo-87.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="image" parallax_style="vcpb-default" bg_image_new="id^10932|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/revslider/home8/slide-business32.jpg|caption^null|alt^null|title^slide-business32.jpg|description^null" bg_override="ex-full" css=".vc_custom_1548350939006{padding-top: 50px !important;padding-bottom: 100px !important;padding-left: 0px !important;}"][vc_column css=".vc_custom_1525888681118{padding-left: 5px !important;}"][vc_row_inner][vc_column_inner width="5/6"][ult_animation_block animation="fadeInUp" animation_duration="1" animation_delay="0.3" animation_iteration_count="1"][ult_content_box bg_color="#ffffff" box_shadow="horizontal:0px|vertical:0px|blur:25px|spread:10px|color:rgba(166,179,191,0.17)|style:outset|" padding="padding:40px;" hover_bg_color="#ffffff" hover_border_color="#ffffff" hover_box_shadow="horizontal:0px|vertical:0px|blur:25px|spread:10px|color:rgba(166,179,191,0.17)|style:outset|"][vc_custom_heading text="Request your quote" use_theme_fonts="yes"][vc_empty_space height="10px"][vc_custom_heading text="Completely procrastinate interoperable content after resource maximizing<br />
processes Interactively foster process-centric quality." font_container="tag:p|text_align:left" use_theme_fonts="yes"][vc_empty_space height="30px"][contact-form-7 id="4727"][/ult_content_box][/ult_animation_block][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Flip Box + Background', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['faq'];
$data['custom_class'] = 'faq';
$data['image_path'] = $skudo_get_directory .'images/skudo-86.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="image" parallax_style="vcpb-vz-jquery" bg_image_new="id^9523|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/slide-business28.jpg|caption^null|alt^null|title^slide-business28|description^null" bg_image_repeat="no-repeat" bg_override="ex-full" enable_overlay="enable_overlay_value" overlay_color="rgba(67,184,222,0.86)" css=".vc_custom_1548351064207{padding-top: 90px !important;padding-bottom: 60px !important;}"][vc_column][ult_animation_block animation="slideInUp" animation_duration="1" animation_delay="0.3" animation_iteration_count="1"][vc_row_inner][vc_column_inner width="1/3" css=".vc_custom_1463051541464{padding-right: 20px !important;padding-left: 20px !important;}"][icon_counter border_size="" border_color="#ffffff" icon="linearicons-road-sign" icon_size="64" icon_color="__USE_THEME_MAIN_COLOR__" text_color="" bg_color="#ffffff" block_title_front="Pre-Sale Questions" block_title_back="Pre-Sale Questions" block_desc_back="Do you want to buy a theme but you’re not sure if it’s got all the features you need? Send us an email through the contact form in our contact page, we will answer as soon as possible!" custom_link="1" button_link="url:%23||" button_text="CONTACT US" button_bg="__USE_THEME_MAIN_COLOR__" button_txt="#ffffff" height_type="ifb-custom-height" box_height="270" cont_align="on" title_font="font_family:Poppins|font_call:Poppins|variant:500" title_font_style="font-weight:500;" desc_font="font_family:Open Sans|font_call:Open+Sans" desc_font_size="desktop:12px;" title_font_size="desktop:18px;"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1463051549047{padding-right: 20px !important;padding-left: 20px !important;}"][icon_counter border_size="" border_color="" icon="linearicons-bubble-question" icon_size="64" icon_color="__USE_THEME_MAIN_COLOR__" text_color="" bg_color="" block_title_front="Help & Support" block_title_back="Help & Support" block_desc_back="Do you need help related to our themes? We have a dedicated team ready to help. Create an account and claim your free support!" custom_link="1" button_link="url:%23|||" button_text="LOGIN TO SUPORT" button_bg="__USE_THEME_MAIN_COLOR__" button_txt="#ffffff" height_type="ifb-custom-height" box_height="270" cont_align="on" el_class="custom-carbon-colors" ult_param_heading="" title_font="font_family:Poppins|font_call:Poppins|variant:500" title_font_style="font-weight:500;" desc_font="font_family:Open Sans|font_call:Open+Sans" desc_font_size="desktop:12px;" title_font_size="desktop:18px;"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1463051563183{padding-right: 20px !important;padding-left: 20px !important;}"][icon_counter border_size="" border_color="" icon="linearicons-presentation" icon_size="64" icon_color="__USE_THEME_MAIN_COLOR__" text_color="" bg_color="" block_title_front="Customizations" block_title_back="Customizations" block_desc_back="Need to modify your theme? Request a quote for custom design and development work." custom_link="1" button_link="url:%23|||" button_text="REQUEST A QUOTE" button_bg="__USE_THEME_MAIN_COLOR__" button_txt="#ffffff" height_type="ifb-custom-height" box_height="270" cont_align="on" el_class="custom-carbon-colors" ult_param_heading="" title_font="font_family:Poppins|font_call:Poppins|variant:500" title_font_style="font-weight:500;" desc_font="font_family:Open Sans|font_call:Open+Sans" desc_font_size="desktop:12px;" title_font_size="desktop:18px;"][/vc_column_inner][/vc_row_inner][/ult_animation_block][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'FAQ Section with Accordion', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['faq'];
$data['custom_class'] = 'faq';
$data['image_path'] = $skudo_get_directory .'images/skudo-85.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="bg_color" bg_override="ex-full" css=".vc_custom_1525973022596{padding-top: 100px !important;padding-bottom: 100px !important;}" bg_color_value="#ffffff"][vc_column width="2/3"][vc_custom_heading text="1. General WordPress Questions" font_container="tag:h4|text_align:left" use_theme_fonts="yes" el_class="no-letter-spacing"][vc_empty_space height="10px"][vc_tta_accordion active_section="1"][vc_tta_section title="Well, what is WordPress?" tab_id="what-is-wordpressb517-67b6"][vc_column_text]Objectively formulate orthogonal e-services rather than maintainable leadership skills. Efficiently aggregate client-based data for cross-media technologies. Proactively embrace robust catalysts for.[/vc_column_text][/vc_tta_section][vc_tta_section title="Ok I understand! And now, what's a theme?" tab_id="123213dcb517-67b6"][vc_column_text]Monotonectally administrate inexpensive interfaces and end-to-end functionalities. Progressively morph error-free e-markets after out-of-the-box scenarios. Distinctively customize ethical bandwidth vis-a-vis fully tested convergence. Proactively aggregate client-based models without B2B collaboration and idea-sharing. Progressively embrace B2B technology through vertical.[/vc_column_text][/vc_tta_section][vc_tta_section title="How do i install a theme?" tab_id="123213dsdfb517-67b6"][vc_column_text]Completely reinvent intermandated initiatives through vertical innovation. Efficiently fashion sustainable architectures before functionalized portals. Conveniently morph market.[/vc_column_text][/vc_tta_section][vc_tta_section title="Another faq question goes here" tab_id="1463069323507-e2342039-7358b517-67b6"][vc_column_text]I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.[/vc_column_text][/vc_tta_section][/vc_tta_accordion][vc_empty_space height="20px"][vc_separator][vc_empty_space height="45px"][vc_custom_heading text="2. Pre-Sale Questions" font_container="tag:h4|text_align:left" use_theme_fonts="yes" el_class="no-letter-spacing"][vc_empty_space height="10px"][vc_tta_accordion active_section=""][vc_tta_section title="What i get with my purchase?" tab_id="12121656235123b517-67b6"][vc_column_text]I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.[/vc_column_text][/vc_tta_section][vc_tta_section title="$59 Bucks is one-time fee? or is monthly?" tab_id="9879179327917321b517-67b6"][vc_column_text]Monotonectally administrate inexpensive interfaces and end-to-end functionalities. Progressively morph error-free e-markets after out-of-the-box scenarios. Distinctively customize ethical bandwidth vis-a-vis fully tested convergence. Proactively aggregate client-based models without B2B collaboration and idea-sharing. Progressively embrace B2B technology through vertical.[/vc_column_text][/vc_tta_section][vc_tta_section title="About the license. What i can do with my purchase?" tab_id="65641923819831b517-67b6"][vc_column_text]Rapidiously matrix principle-centered products after bricks-and-clicks human capital. Objectively myocardinate exceptional processes vis-a-vis an expanded array of products. Professionally provide access to clicks-and-mortar infomediaries vis-a-vis effective outsourcing. Collaboratively reconceptualize front-end human capital after extensible total linkage. Synergistically embrace sticky intellectual capital with emerging results.</p>
<p>Completely reinvent intermandated initiatives through vertical innovation. Efficiently fashion sustainable architectures before functionalized portals. Conveniently morph market.[/vc_column_text][/vc_tta_section][vc_tta_section title="Section" tab_id="1463069328596-2ee9c1c5-da44b517-67b6"][/vc_tta_section][/vc_tta_accordion][vc_empty_space height="20px"][vc_separator][vc_empty_space height="45px"][vc_custom_heading text="3. After Purchase Questions (Support)" font_container="tag:h4|text_align:left" use_theme_fonts="yes" el_class="no-letter-spacing"][vc_empty_space height="10px"][vc_tta_accordion active_section=""][vc_tta_section title="Where i get Support?" tab_id="1463068267833-db1de2a6-9910b517-67b6"][vc_column_text]I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.[/vc_column_text][/vc_tta_section][vc_tta_section title="I want to make some customizations on my theme" tab_id="1463068268038-4d303fc0-1797b517-67b6"][vc_column_text]Monotonectally administrate inexpensive interfaces and end-to-end functionalities. Progressively morph error-free e-markets after out-of-the-box scenarios. Distinctively customize ethical bandwidth vis-a-vis fully tested convergence. Proactively aggregate client-based models without B2B collaboration and idea-sharing. Progressively embrace B2B technology through vertical.[/vc_column_text][/vc_tta_section][vc_tta_section title="I have another website to do, do i need a new license?" tab_id="1463068268247-4ce5e40c-0300b517-67b6"][vc_column_text]Rapidiously matrix principle-centered products after bricks-and-clicks human capital. Objectively myocardinate exceptional processes vis-a-vis an expanded array of products. Professionally provide access to clicks-and-mortar infomediaries vis-a-vis effective outsourcing. Collaboratively reconceptualize front-end human capital after extensible total linkage. Synergistically embrace sticky intellectual capital with emerging results.</p>
<p>Completely reinvent intermandated initiatives through vertical innovation. Efficiently fashion sustainable architectures before functionalized portals. Conveniently morph market.[/vc_column_text][/vc_tta_section][/vc_tta_accordion][/vc_column][vc_column width="1/3"][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][interactive_banner_2 banner_title="Dedicated Support team" banner_desc="Praesent sapien massa, convallis a pellentesque nec, egestas non nisi." banner_image="id^10134|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/slide-business50.jpg|caption^null|alt^null|title^slide-business50|description^null" banner_style="style1" banner_color_desc="#ffffff" banner_color_bg="#43b8de" image_opacity="0.8" image_opacity_on_hover="0.3" banner_title_font_family="font_family:Poppins|font_call:Poppins|variant:600" banner_title_style="font-weight:600;" banner_title_font_size="desktop:18px;"][vc_empty_space height="25px"][vc_custom_heading text="CONTACT US" font_container="tag:h6|text_align:left" use_theme_fonts="yes" el_class="no-letter-spacing"][vc_row_inner][vc_column_inner][contact-form-7 id="1965"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Counter with 3 Col (icon at Left)', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['counters'];
$data['custom_class'] = 'counters';
$data['image_path'] = $skudo_get_directory .'images/skudo-83.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="bg_color" bg_override="ex-full" css=".vc_custom_1525535546043{padding-top: 120px !important;padding-bottom: 80px !important;}" bg_color_value="#439ade"][vc_column][ult_animation_block animation="fadeInUp" animation_duration="0.5" animation_delay="1" animation_iteration_count="1"][vc_row_inner][vc_column_inner width="1/3"][stat_counter icon="linearicons-users2" icon_size="45" icon_color="#ffffff" counter_title="CURRENT CLIENTS" counter_value="2250" counter_sep="" speed="3" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" counter_color_txt="rgba(255,255,255,0.5)" desc_font="font_family:Poppins|font_call:Poppins|variant:600" desc_font_style="font-weight:600;" font_size_title="12" font_size_counter="58" title_font_size="desktop:11px;" desc_font_size="desktop:30px;" desc_font_color="#ffffff" title_font_line_height="desktop:12px;"][/vc_column_inner][vc_column_inner width="1/3"][stat_counter icon="linearicons-pen-add" icon_size="45" icon_color="#ffffff" counter_title="FINISHED WORKS" counter_value="340" counter_sep="" speed="3" title_font="font_family:Quicksand|font_call:Quicksand|variant:500" title_font_style="font-weight:500;" counter_color_txt="rgba(255,255,255,0.5)" desc_font="font_family:Poppins|font_call:Poppins|variant:600" desc_font_style="font-weight:600;" font_size_title="12" font_size_counter="58" title_font_size="desktop:11px;" desc_font_size="desktop:30px;" desc_font_color="#ffffff" title_font_line_height="desktop:12px;"][/vc_column_inner][vc_column_inner width="1/3"][stat_counter icon="linearicons-database-lock" icon_size="45" icon_color="#ffffff" counter_title="DATA STORED" counter_value="18250" counter_sep="" speed="3" title_font="font_family:Quicksand|font_call:Quicksand|variant:500" title_font_style="font-weight:500;" counter_color_txt="rgba(255,255,255,0.5)" desc_font="font_family:Poppins|font_call:Poppins|variant:600" desc_font_style="font-weight:600;" font_size_title="12" font_size_counter="58" title_font_size="desktop:11px;" desc_font_size="desktop:30px;" desc_font_color="#ffffff" title_font_line_height="desktop:12px;"][/vc_column_inner][/vc_row_inner][/ult_animation_block][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Title with Partners (+ Background)', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-82.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="bg_color" bg_override="ex-full" css=".vc_custom_1525968644046{padding-top: 80px !important;padding-bottom: 30px !important;}" bg_color_value="#ffffff"][vc_column][vc_custom_heading text="Our Clients Around The World" font_container="tag:h2|text_align:center" use_theme_fonts="yes"][vc_empty_space height="10px"][vc_custom_heading text="Continually develop prospective convergence rather than proactive<br />
leadership globally maintain tactical products." font_container="tag:p|font_size:18px|text_align:center" use_theme_fonts="yes"][/vc_column][/vc_row][vc_row bg_type="image" parallax_style="vcpb-default" bg_image_new="id^10117|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/map-points.png|caption^null|alt^null|title^map-points|description^null" bg_image_repeat="no-repeat" bg_override="ex-full" css=".vc_custom_1548351161522{margin-top: 50px !important;margin-bottom: 100px !important;padding-top: 80px !important;padding-bottom: 100px !important;}"][vc_column][partners scroller="no" number_per_row="4" innerborder="no"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Simple Style Form', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['contactforms'];
$data['custom_class'] = 'contactforms';
$data['image_path'] = $skudo_get_directory .'images/skudo-81.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="bg_color" bg_override="ex-full" css=".vc_custom_1492202163222{padding-top: 100px !important;padding-bottom: 100px !important;}" bg_color_value="#ffffff"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_custom_heading text="Contact us trough this form" font_container="tag:h4|text_align:center" use_theme_fonts="yes" el_class="no-letter-spacing"][vc_empty_space height="25px"][contact-form-7 id="9029"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Wide Map with Logo and Location', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['contactforms'];
$data['custom_class'] = 'contactforms';
$data['image_path'] = $skudo_get_directory .'images/skudo-80.jpg'; 
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][ult_animation_block animation="fadeInUp" animation_duration="1" animation_delay="0.4" animation_iteration_count="1" opacity_start_effect="80"][ultimate_google_map height="450px" lat="-37.81382" lng="144.96953" zoom="11" scrollwheel="disable" infowindow_open="off" marker_icon="custom" icon_img="id^10000|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/symbol.png|caption^null|alt^null|title^symbol|description^null" zoomcontrol="true" map_style="JTVCJTdCJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjJhZG1pbmlzdHJhdGl2ZSUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIybGFiZWxzLnRleHQuZmlsbCUyMiUyQyUyMnN0eWxlcnMlMjIlM0ElNUIlN0IlMjJjb2xvciUyMiUzQSUyMiUyMzQ0NDQ0NCUyMiU3RCU1RCU3RCUyQyU3QiUyMmZlYXR1cmVUeXBlJTIyJTNBJTIybGFuZHNjYXBlJTIyJTJDJTIyZWxlbWVudFR5cGUlMjIlM0ElMjJhbGwlMjIlMkMlMjJzdHlsZXJzJTIyJTNBJTVCJTdCJTIyY29sb3IlMjIlM0ElMjIlMjNmMmYyZjIlMjIlN0QlNUQlN0QlMkMlN0IlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMnBvaSUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIyYWxsJTIyJTJDJTIyc3R5bGVycyUyMiUzQSU1QiU3QiUyMnZpc2liaWxpdHklMjIlM0ElMjJvZmYlMjIlN0QlNUQlN0QlMkMlN0IlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMnBvaS5idXNpbmVzcyUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIyZ2VvbWV0cnkuZmlsbCUyMiUyQyUyMnN0eWxlcnMlMjIlM0ElNUIlN0IlMjJ2aXNpYmlsaXR5JTIyJTNBJTIyb24lMjIlN0QlNUQlN0QlMkMlN0IlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMnJvYWQlMjIlMkMlMjJlbGVtZW50VHlwZSUyMiUzQSUyMmFsbCUyMiUyQyUyMnN0eWxlcnMlMjIlM0ElNUIlN0IlMjJzYXR1cmF0aW9uJTIyJTNBLTEwMCU3RCUyQyU3QiUyMmxpZ2h0bmVzcyUyMiUzQTQ1JTdEJTVEJTdEJTJDJTdCJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjJyb2FkLmhpZ2h3YXklMjIlMkMlMjJlbGVtZW50VHlwZSUyMiUzQSUyMmFsbCUyMiUyQyUyMnN0eWxlcnMlMjIlM0ElNUIlN0IlMjJ2aXNpYmlsaXR5JTIyJTNBJTIyc2ltcGxpZmllZCUyMiU3RCU1RCU3RCUyQyU3QiUyMmZlYXR1cmVUeXBlJTIyJTNBJTIycm9hZC5hcnRlcmlhbCUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIybGFiZWxzLmljb24lMjIlMkMlMjJzdHlsZXJzJTIyJTNBJTVCJTdCJTIydmlzaWJpbGl0eSUyMiUzQSUyMm9mZiUyMiU3RCU1RCU3RCUyQyU3QiUyMmZlYXR1cmVUeXBlJTIyJTNBJTIydHJhbnNpdCUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIyYWxsJTIyJTJDJTIyc3R5bGVycyUyMiUzQSU1QiU3QiUyMnZpc2liaWxpdHklMjIlM0ElMjJvZmYlMjIlN0QlNUQlN0QlMkMlN0IlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMndhdGVyJTIyJTJDJTIyZWxlbWVudFR5cGUlMjIlM0ElMjJhbGwlMjIlMkMlMjJzdHlsZXJzJTIyJTNBJTVCJTdCJTIyY29sb3IlMjIlM0ElMjIlMjNiNGQ0ZTElMjIlN0QlMkMlN0IlMjJ2aXNpYmlsaXR5JTIyJTNBJTIyb24lMjIlN0QlNUQlN0QlNUQ="]PO Box 16122 Collins Street West
Victoria 8007 Australia[/ultimate_google_map][/ult_animation_block][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Title and Sub-title', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-79.jpg'; 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1525883682926{padding-top: 125px !important;padding-bottom: 125px !important;}"][vc_column][vc_custom_heading text="Let's work together" font_container="tag:h1|text_align:center" use_theme_fonts="yes" el_class="no-letter-spacing"][vc_empty_space height="25px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3" css=".vc_custom_1492185227299{padding-right: 25px !important;padding-left: 25px !important;}"][vc_custom_heading text="Contact us via the contact form below, or come visit us on our office in Melbourne and we will discuss your new project" font_container="tag:p|font_size:18px|text_align:center|color:%23999999" use_theme_fonts="yes" el_class="no-letter-spacing"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Multiple Fields Form + Info', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['contactforms'];
$data['custom_class'] = 'contactforms';
$data['image_path'] = $skudo_get_directory .'images/skudo-78.jpg'; 
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content" css=".vc_custom_1492206304652{padding-top: 100px !important;padding-right: 50px !important;padding-bottom: 100px !important;padding-left: 50px !important;}"][vc_column width="1/3" el_class="box-paddingr"][vc_custom_heading text="Get in touch" use_theme_fonts="yes" el_class="no-letter-spacing"][vc_empty_space height="10px"][vc_custom_heading text="We are waiting for you on our office in Melbourne or in other way, you can contact us via the contact form below to discuss your project, your idea." font_container="tag:p|font_size:16px|text_align:left|color:%23999999|line_height:25px" use_theme_fonts="yes" el_class="no-letter-spacing"][vc_empty_space height="25px"][vc_column_text]30 South Park Avenue, CA 94108<br />
San Francisco USA</p>
<p><strong>Email:</strong> geral@example.com<br />
<strong>Phone:</strong> (123) 456-7890<br />
<strong>Fax:</strong> +08 (123) 456-7890[/vc_column_text][vc_empty_space height="25px"][just_icon icon="Defaults-twitter" icon_size="12" icon_color="#ffffff" icon_style="circle" icon_color_bg="__USE_THEME_MAIN_COLOR__" icon_link="url:%23|||" icon_animation="fadeInUp" icon_align="left" el_class="align-icon-left"][just_icon icon="Defaults-facebook facebook-f" icon_size="12" icon_color="#ffffff" icon_style="circle" icon_color_bg="__USE_THEME_MAIN_COLOR__" icon_link="url:%23|||" icon_animation="fadeInUp" icon_align="left" el_class="align-icon-left"][just_icon icon="Defaults-linkedin" icon_size="12" icon_color="#ffffff" icon_style="circle" icon_color_bg="__USE_THEME_MAIN_COLOR__" icon_link="url:%23|||" icon_animation="fadeInUp" icon_align="left" el_class="align-icon-left"][/vc_column][vc_column width="2/3"][ultimate_spacer height="0" height_on_mob_landscape="70" height_on_mob="70"][contact-form-7 id="9028"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1492202652410{padding-top: 1px !important;padding-bottom: 1px !important;}"][vc_column][vc_separator color="custom" accent_color="#ededed"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Wide Map with Pin', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['contactforms'];
$data['custom_class'] = 'contactforms';
$data['image_path'] = $skudo_get_directory .'images/skudo-77.jpg'; 
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][ult_animation_block animation="fadeIn" animation_duration="1" animation_delay="1" animation_iteration_count="1" opacity_start_effect="80"][ultimate_google_map height="500px" lat="-37.81382" lng="144.96953" zoom="14" scrollwheel="disable" zoomcontrol="true" map_style="JTVCJTdCJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjJhZG1pbmlzdHJhdGl2ZSUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIybGFiZWxzLnRleHQuZmlsbCUyMiUyQyUyMnN0eWxlcnMlMjIlM0ElNUIlN0IlMjJjb2xvciUyMiUzQSUyMiUyMzQ0NDQ0NCUyMiU3RCU1RCU3RCUyQyU3QiUyMmZlYXR1cmVUeXBlJTIyJTNBJTIybGFuZHNjYXBlJTIyJTJDJTIyZWxlbWVudFR5cGUlMjIlM0ElMjJhbGwlMjIlMkMlMjJzdHlsZXJzJTIyJTNBJTVCJTdCJTIyY29sb3IlMjIlM0ElMjIlMjNmMmYyZjIlMjIlN0QlNUQlN0QlMkMlN0IlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMnBvaSUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIyYWxsJTIyJTJDJTIyc3R5bGVycyUyMiUzQSU1QiU3QiUyMnZpc2liaWxpdHklMjIlM0ElMjJvZmYlMjIlN0QlNUQlN0QlMkMlN0IlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMnBvaS5idXNpbmVzcyUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIyZ2VvbWV0cnkuZmlsbCUyMiUyQyUyMnN0eWxlcnMlMjIlM0ElNUIlN0IlMjJ2aXNpYmlsaXR5JTIyJTNBJTIyb24lMjIlN0QlNUQlN0QlMkMlN0IlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMnJvYWQlMjIlMkMlMjJlbGVtZW50VHlwZSUyMiUzQSUyMmFsbCUyMiUyQyUyMnN0eWxlcnMlMjIlM0ElNUIlN0IlMjJzYXR1cmF0aW9uJTIyJTNBLTEwMCU3RCUyQyU3QiUyMmxpZ2h0bmVzcyUyMiUzQTQ1JTdEJTVEJTdEJTJDJTdCJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjJyb2FkLmhpZ2h3YXklMjIlMkMlMjJlbGVtZW50VHlwZSUyMiUzQSUyMmFsbCUyMiUyQyUyMnN0eWxlcnMlMjIlM0ElNUIlN0IlMjJ2aXNpYmlsaXR5JTIyJTNBJTIyc2ltcGxpZmllZCUyMiU3RCU1RCU3RCUyQyU3QiUyMmZlYXR1cmVUeXBlJTIyJTNBJTIycm9hZC5hcnRlcmlhbCUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIybGFiZWxzLmljb24lMjIlMkMlMjJzdHlsZXJzJTIyJTNBJTVCJTdCJTIydmlzaWJpbGl0eSUyMiUzQSUyMm9mZiUyMiU3RCU1RCU3RCUyQyU3QiUyMmZlYXR1cmVUeXBlJTIyJTNBJTIydHJhbnNpdCUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIyYWxsJTIyJTJDJTIyc3R5bGVycyUyMiUzQSU1QiU3QiUyMnZpc2liaWxpdHklMjIlM0ElMjJvZmYlMjIlN0QlNUQlN0QlMkMlN0IlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMndhdGVyJTIyJTJDJTIyZWxlbWVudFR5cGUlMjIlM0ElMjJhbGwlMjIlMkMlMjJzdHlsZXJzJTIyJTNBJTVCJTdCJTIyY29sb3IlMjIlM0ElMjIlMjNiNGQ0ZTElMjIlN0QlMkMlN0IlMjJ2aXNpYmlsaXR5JTIyJTNBJTIyb24lMjIlN0QlNUQlN0QlNUQ="]30 South Park Avenue<br />
CA 94108 San Francisco USA[/ultimate_google_map][/ult_animation_block][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Contact Elements', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['contactforms'];
$data['custom_class'] = 'contactforms';
$data['image_path'] = $skudo_get_directory .'images/skudo-76.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="image" parallax_style="vcpb-default" bg_image_new="id^9126|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/04/slide-business3.jpg|caption^null|alt^null|title^slide-business3|description^null" bg_image_repeat="no-repeat" bg_override="ex-full" css=".vc_custom_1548351272954{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column][vc_row_inner][vc_column_inner width="1/4"][vc_column_text]</p>
<h4>We're Open</h4>
<p><strong>Monday to Friday</strong>: 10:00 / 19:00<br /><strong>Saturday</strong>: 10:00 / 14:00<br /><strong>Sunday</strong>: Closed[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][vc_column_text]</p>
<h4>Emails</h4>
<p><strong>CEO:</strong> <a href="#">geral@example.com</a><br /><strong>Marketing:</strong> <a href="#">cmarca@example.com</a><br /><strong>Carrers:</strong> <a href="#">jobs@example.com</a>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][vc_column_text]</p>
<h4>Call us</h4>
<p><strong>Paris Office:</strong> (+23) 345 322 233<br /><strong>Japan Office:</strong> (+129) 366 822 122<br /><strong>USA Office:</strong> (+57) 112 552 823[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][vc_column_text]</p>
<h4>Our Address</h4>
<p>PO Box 16122 Collins Street West<br />Victoria 8007 Australia[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Contact Form with Map', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['contactforms'];
$data['custom_class'] = 'contactforms';
$data['image_path'] = $skudo_get_directory .'images/skudo-75.jpg'; 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1528471507622{padding-top: 80px !important;padding-bottom: 80px !important;}"][vc_column width="1/3"][vc_custom_heading text="What you need?" font_container="tag:h3|text_align:left" use_theme_fonts="yes"][vc_empty_space height="10px"][vc_column_text]Contact us via the contact form below or come visit our office in Melbourne.[/vc_column_text][vc_empty_space height="20px"][contact-form-7 id="9030"][/vc_column][vc_column width="2/3" el_class="box-paddingl"][vc_empty_space height="10px"][ultimate_spacer height="0" height_on_mob_landscape="40" height_on_mob="40"][ultimate_google_map height="400px" lat="-37.81382" lng="144.96953" zoom="13" scrollwheel="disable" marker_icon="custom" icon_img="id^10000|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/symbol.png|caption^null|alt^null|title^symbol|description^null" zoomcontrol="true" map_style="JTVCJTdCJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjJhZG1pbmlzdHJhdGl2ZSUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIybGFiZWxzLnRleHQuZmlsbCUyMiUyQyUyMnN0eWxlcnMlMjIlM0ElNUIlN0IlMjJjb2xvciUyMiUzQSUyMiUyMzQ0NDQ0NCUyMiU3RCU1RCU3RCUyQyU3QiUyMmZlYXR1cmVUeXBlJTIyJTNBJTIybGFuZHNjYXBlJTIyJTJDJTIyZWxlbWVudFR5cGUlMjIlM0ElMjJhbGwlMjIlMkMlMjJzdHlsZXJzJTIyJTNBJTVCJTdCJTIyY29sb3IlMjIlM0ElMjIlMjNmMmYyZjIlMjIlN0QlNUQlN0QlMkMlN0IlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMnBvaSUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIyYWxsJTIyJTJDJTIyc3R5bGVycyUyMiUzQSU1QiU3QiUyMnZpc2liaWxpdHklMjIlM0ElMjJvZmYlMjIlN0QlNUQlN0QlMkMlN0IlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMnBvaS5idXNpbmVzcyUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIyZ2VvbWV0cnkuZmlsbCUyMiUyQyUyMnN0eWxlcnMlMjIlM0ElNUIlN0IlMjJ2aXNpYmlsaXR5JTIyJTNBJTIyb24lMjIlN0QlNUQlN0QlMkMlN0IlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMnJvYWQlMjIlMkMlMjJlbGVtZW50VHlwZSUyMiUzQSUyMmFsbCUyMiUyQyUyMnN0eWxlcnMlMjIlM0ElNUIlN0IlMjJzYXR1cmF0aW9uJTIyJTNBLTEwMCU3RCUyQyU3QiUyMmxpZ2h0bmVzcyUyMiUzQTQ1JTdEJTVEJTdEJTJDJTdCJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjJyb2FkLmhpZ2h3YXklMjIlMkMlMjJlbGVtZW50VHlwZSUyMiUzQSUyMmFsbCUyMiUyQyUyMnN0eWxlcnMlMjIlM0ElNUIlN0IlMjJ2aXNpYmlsaXR5JTIyJTNBJTIyc2ltcGxpZmllZCUyMiU3RCU1RCU3RCUyQyU3QiUyMmZlYXR1cmVUeXBlJTIyJTNBJTIycm9hZC5hcnRlcmlhbCUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIybGFiZWxzLmljb24lMjIlMkMlMjJzdHlsZXJzJTIyJTNBJTVCJTdCJTIydmlzaWJpbGl0eSUyMiUzQSUyMm9mZiUyMiU3RCU1RCU3RCUyQyU3QiUyMmZlYXR1cmVUeXBlJTIyJTNBJTIydHJhbnNpdCUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIyYWxsJTIyJTJDJTIyc3R5bGVycyUyMiUzQSU1QiU3QiUyMnZpc2liaWxpdHklMjIlM0ElMjJvZmYlMjIlN0QlNUQlN0QlMkMlN0IlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMndhdGVyJTIyJTJDJTIyZWxlbWVudFR5cGUlMjIlM0ElMjJhbGwlMjIlMkMlMjJzdHlsZXJzJTIyJTNBJTVCJTdCJTIyY29sb3IlMjIlM0ElMjIlMjNiNGQ0ZTElMjIlN0QlMkMlN0IlMjJ2aXNpYmlsaXR5JTIyJTNBJTIyb24lMjIlN0QlNUQlN0QlNUQ="]30 South Park Avenue<br />
CA 94108 Melbourne Australia[/ultimate_google_map][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Contacts + Background', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['contactforms'];
$data['custom_class'] = 'contactforms';
$data['image_path'] = $skudo_get_directory .'images/skudo-74.jpg'; 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1528470808985{margin-bottom: -90px !important;}" el_class="contacts-zindex-higher"][vc_column][ult_content_box box_shadow="horizontal:0px|vertical:0px|blur:25px|spread:10px|color:rgba(172,182,191,0.2)|style:outset|" padding="padding-top:50px;padding-right:30px;padding-bottom:40px;padding-left:30px;" hover_box_shadow="horizontal:0px|vertical:0px|blur:25px|spread:10px|color:rgba(172,182,191,0.2)|style:outset|" hover_bg_color="#ffffff" bg_color="#ffffff"][vc_row_inner][vc_column_inner width="1/3"][ult_animation_block animation="fadeInUp" animation_duration="1" animation_delay="0" animation_iteration_count="1" opacity_start_effect="80"][bsf-info-box icon="linearicons-map" icon_size="34" icon_color="__USE_THEME_MAIN_COLOR__" icon_animation="fadeInDown" pos="top" title_font="font_family:Poppins|font_call:Poppins|variant:regular" title_font_style="font-weight:normal;font-style:normal;" desc_font="font_family:Poppins|font_call:Poppins|variant:regular" desc_font_style="font-weight:normal;font-style:normal;" title_font_size="desktop:14px;" desc_font_size="desktop:15px;" desc_font_line_height="desktop:22px;" title_font_color="#ffffff"]PO Box 16122 Collins Street West<br />Victoria 8007 Australia[/bsf-info-box][/ult_animation_block][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1525886959910{padding-left: 40px !important;}"][ult_animation_block animation="fadeInUp" animation_duration="1" animation_delay="0.3" animation_iteration_count="1" opacity_start_effect="80"][bsf-info-box icon="linearicons-at-sign" icon_size="34" icon_color="__USE_THEME_MAIN_COLOR__" pos="top" title_font="font_family:Raleway|font_call:Raleway" desc_font="font_family:Poppins|font_call:Poppins|variant:regular" desc_font_style="font-weight:normal;font-style:normal;" title_font_size="desktop:16px;" desc_font_size="desktop:15px;" desc_font_line_height="desktop:22px;"]geral@example.com[/bsf-info-box][/ult_animation_block][/vc_column_inner][vc_column_inner width="1/3"][ult_animation_block animation="fadeInUp" animation_duration="1" animation_delay="0.6" animation_iteration_count="1" opacity_start_effect="80"][bsf-info-box icon="linearicons-phone-wave" icon_size="34" icon_color="__USE_THEME_MAIN_COLOR__" pos="top" title_font="font_family:Raleway|font_call:Raleway" desc_font="font_family:Poppins|font_call:Poppins|variant:regular" desc_font_style="font-weight:normal;font-style:normal;" title_font_size="desktop:16px;" desc_font_size="desktop:15px;" desc_font_line_height="desktop:22px;"](+23) 345 322 233[/bsf-info-box][/ult_animation_block][/vc_column_inner][/vc_row_inner][/ult_content_box][/vc_column][/vc_row][vc_row bg_type="image" parallax_style="vcpb-vz-jquery" bg_image_new="id^9781|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/slide-business43.jpg|caption^null|alt^null|title^slide-business43|description^null" bg_image_repeat="no-repeat" bg_override="ex-full" css=".vc_custom_1548351370580{padding-top: 200px !important;padding-bottom: 200px !important;}" el_class="contacts-zindex-lower"][vc_column][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Wide Map with Logo', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['contactforms'];
$data['custom_class'] = 'contactforms';
$data['image_path'] = $skudo_get_directory .'images/skudo-72.jpg'; 
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][ult_animation_block animation="fadeIn" animation_duration="1" animation_delay="1" animation_iteration_count="1" opacity_start_effect="80"][ultimate_google_map height="450px" lat="-37.81382" lng="144.96953" zoom="13" scrollwheel="disable" marker_icon="custom" icon_img="id^10633|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/07/symbol_dark.png|caption^null|alt^null|title^symbol_dark|description^null" zoomcontrol="true" map_style="JTVCJTdCJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjJhZG1pbmlzdHJhdGl2ZSUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIybGFiZWxzLnRleHQuZmlsbCUyMiUyQyUyMnN0eWxlcnMlMjIlM0ElNUIlN0IlMjJjb2xvciUyMiUzQSUyMiUyMzQ0NDQ0NCUyMiU3RCU1RCU3RCUyQyU3QiUyMmZlYXR1cmVUeXBlJTIyJTNBJTIybGFuZHNjYXBlJTIyJTJDJTIyZWxlbWVudFR5cGUlMjIlM0ElMjJhbGwlMjIlMkMlMjJzdHlsZXJzJTIyJTNBJTVCJTdCJTIyY29sb3IlMjIlM0ElMjIlMjNmMmYyZjIlMjIlN0QlNUQlN0QlMkMlN0IlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMnBvaSUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIyYWxsJTIyJTJDJTIyc3R5bGVycyUyMiUzQSU1QiU3QiUyMnZpc2liaWxpdHklMjIlM0ElMjJvZmYlMjIlN0QlNUQlN0QlMkMlN0IlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMnBvaS5idXNpbmVzcyUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIyZ2VvbWV0cnkuZmlsbCUyMiUyQyUyMnN0eWxlcnMlMjIlM0ElNUIlN0IlMjJ2aXNpYmlsaXR5JTIyJTNBJTIyb24lMjIlN0QlNUQlN0QlMkMlN0IlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMnJvYWQlMjIlMkMlMjJlbGVtZW50VHlwZSUyMiUzQSUyMmFsbCUyMiUyQyUyMnN0eWxlcnMlMjIlM0ElNUIlN0IlMjJzYXR1cmF0aW9uJTIyJTNBLTEwMCU3RCUyQyU3QiUyMmxpZ2h0bmVzcyUyMiUzQTQ1JTdEJTVEJTdEJTJDJTdCJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjJyb2FkLmhpZ2h3YXklMjIlMkMlMjJlbGVtZW50VHlwZSUyMiUzQSUyMmFsbCUyMiUyQyUyMnN0eWxlcnMlMjIlM0ElNUIlN0IlMjJ2aXNpYmlsaXR5JTIyJTNBJTIyc2ltcGxpZmllZCUyMiU3RCU1RCU3RCUyQyU3QiUyMmZlYXR1cmVUeXBlJTIyJTNBJTIycm9hZC5hcnRlcmlhbCUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIybGFiZWxzLmljb24lMjIlMkMlMjJzdHlsZXJzJTIyJTNBJTVCJTdCJTIydmlzaWJpbGl0eSUyMiUzQSUyMm9mZiUyMiU3RCU1RCU3RCUyQyU3QiUyMmZlYXR1cmVUeXBlJTIyJTNBJTIydHJhbnNpdCUyMiUyQyUyMmVsZW1lbnRUeXBlJTIyJTNBJTIyYWxsJTIyJTJDJTIyc3R5bGVycyUyMiUzQSU1QiU3QiUyMnZpc2liaWxpdHklMjIlM0ElMjJvZmYlMjIlN0QlNUQlN0QlMkMlN0IlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMndhdGVyJTIyJTJDJTIyZWxlbWVudFR5cGUlMjIlM0ElMjJhbGwlMjIlMkMlMjJzdHlsZXJzJTIyJTNBJTVCJTdCJTIyY29sb3IlMjIlM0ElMjIlMjNiNGQ0ZTElMjIlN0QlMkMlN0IlMjJ2aXNpYmlsaXR5JTIyJTNBJTIyb24lMjIlN0QlNUQlN0QlNUQ="]30 South Park Avenue<br />
CA 94108 San Francisco USA[/ultimate_google_map][/ult_animation_block][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);


$data = array();
$data['name'] = __( 'Text at Left with Background', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-71.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="image" parallax_style="vcpb-default" bg_image_new="id^9791|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/Scene_2.jpg|caption^null|alt^null|title^Scene_2.jpg|description^null" bg_image_repeat="no-repeat" bg_override="ex-full" enable_overlay="enable_overlay_value" overlay_color="rgba(67,184,222,0.89)" seperator_enable="seperator_enable_value" seperator_type="tilt_right_seperator" seperator_svg_height="200" seperator_shape_background="#ffffff" css=".vc_custom_1548351472692{padding-top: 140px !important;padding-bottom: 50px !important;}"][vc_column width="2/3"][vc_custom_heading text="Interested on our Services?" font_container="tag:h3|text_align:left|color:%23ffffff|line_height:1.3em" use_theme_fonts="yes"][vc_custom_heading text="Progressively visualize synergistic customer service<br />
completely promote customer directed products" font_container="tag:p|text_align:left|color:rgba(255%2C255%2C255%2C0.82)" use_theme_fonts="yes" el_class="no-letter-spacing"][vc_btn title="Purchase Skudo now!" style="outline-custom" outline_custom_color="#ffffff" outline_custom_hover_background="#ffffff" outline_custom_hover_text="__USE_THEME_MAIN_COLOR__" shape="round" align="left" css_animation="bottom-to-top"][/vc_column][vc_column width="1/3"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);


$data = array();
$data['name'] = __( 'Features with Images', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['about'];
$data['custom_class'] = 'about';
$data['image_path'] = $skudo_get_directory .'images/skudo-70.jpg'; 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1525716348424{padding-top: 40px !important;padding-bottom: 50px !important;}"][vc_column width="1/3"][vc_single_image image="9985" img_size="full" css_animation="slideInUp"][vc_empty_space height="25px"][vc_custom_heading text="WEB DESIGN" font_container="tag:h5|text_align:left|color:__USE_THEME_MAIN_COLOR__" use_theme_fonts="yes" el_class="no-letter-spacing"][vc_column_text]Interactively expedite customer directed collaboration and idea-sharing rather than e-business internal or.[/vc_column_text][/vc_column][vc_column width="1/3"][vc_single_image image="9984" img_size="full" css_animation="slideInUp"][vc_empty_space height="25px"][vc_custom_heading text="WEB DEVELOPMENT" font_container="tag:h5|text_align:left|color:__USE_THEME_MAIN_COLOR__" use_theme_fonts="yes" el_class="no-letter-spacing"][vc_column_text]Interactively expedite customer directed collaboration and idea-sharing rather than e-business internal or.[/vc_column_text][/vc_column][vc_column width="1/3"][vc_single_image image="9985" img_size="full" css_animation="slideInUp"][vc_empty_space height="25px"][vc_custom_heading text="ILLUSTRATION" font_container="tag:h5|text_align:left|color:__USE_THEME_MAIN_COLOR__" use_theme_fonts="yes" el_class="no-letter-spacing"][vc_column_text]Interactively expedite customer directed collaboration and idea-sharing rather than e-business internal or.[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1525711938304{padding-top: 80px !important;padding-bottom: 100px !important;}"][vc_column width="1/3"][vc_single_image image="9979" img_size="full" css_animation="slideInUp"][vc_empty_space height="25px"][vc_custom_heading text="GAME DEVELOPMENT" font_container="tag:h5|text_align:left|color:__USE_THEME_MAIN_COLOR__" use_theme_fonts="yes" el_class="no-letter-spacing"][vc_column_text]Interactively expedite customer directed collaboration and idea-sharing rather than e-business internal or.[/vc_column_text][/vc_column][vc_column width="1/3"][vc_single_image image="9983" img_size="full" css_animation="slideInUp"][vc_empty_space height="25px"][vc_custom_heading text="APP DEVELOPMENT" font_container="tag:h5|text_align:left|color:__USE_THEME_MAIN_COLOR__" use_theme_fonts="yes" el_class="no-letter-spacing"][vc_column_text]Interactively expedite customer directed collaboration and idea-sharing rather than e-business internal or.[/vc_column_text][/vc_column][vc_column width="1/3"][vc_single_image image="9982" img_size="full" css_animation="slideInUp"][vc_empty_space height="25px"][vc_custom_heading text="BRANDING" font_container="tag:h5|text_align:left|color:__USE_THEME_MAIN_COLOR__" use_theme_fonts="yes" el_class="no-letter-spacing"][vc_column_text]Interactively expedite customer directed collaboration and idea-sharing rather than e-business internal or.[/vc_column_text][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Section with Title', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-69.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="bg_color" bg_override="ex-full" seperator_enable="seperator_enable_value" seperator_type="tilt_left_seperator" seperator_position="bottom_seperator" seperator_svg_height="200" seperator_shape_background="#ffffff" css=".vc_custom_1525711932715{padding-top: 80px !important;padding-bottom: 160px !important;}" bg_color_value="#f2f2f2"][vc_column][ult_animation_block animation="fadeInUp" animation_duration="1" animation_delay="0.3" animation_iteration_count="1"][ultimate_heading sub_heading_color="__USE_THEME_MAIN_COLOR__" alignment="left" sub_heading_font_family="font_family:Poppins|font_call:Poppins|variant:300" sub_heading_style="font-weight:300;" sub_heading_font_size="desktop:65px;tablet_portrait:45px;mobile_landscape:35px;mobile:25px;" sub_heading_line_height="desktop:80px;tablet_portrait:50px;mobile_landscape:40px;mobile:30px;"]We design &amp; develop
creative digital strategies
with attention to details[/ultimate_heading][vc_empty_space height="25px"][vc_custom_heading text="Specializing Master in Service Design trains specialists in the design
of services for businesses and public-sector organizations." font_container="tag:p|font_size:18px|text_align:left|color:%23999999" use_theme_fonts="yes" el_class="no-letter-spacing"][/ult_animation_block][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Accordion + Image ', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['about'];
$data['custom_class'] = 'about';
$data['image_path'] = $skudo_get_directory .'images/skudo-68.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="bg_color" bg_override="ex-full" bg_color_value="#ffffff"][vc_column width="1/2"][vc_empty_space height="40px"][vc_custom_heading text="The next big thing" font_container="tag:h3|text_align:left" use_theme_fonts="yes"][vc_empty_space height="20px"][vc_custom_heading text="Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis commodo consequat." font_container="tag:p|text_align:left" use_theme_fonts="yes"][vc_empty_space height="10px"][vc_tta_accordion c_icon="chevron" c_position="right" active_section="1"][vc_tta_section i_type="openiconic" i_icon_openiconic="vc-oi vc-oi-chart-pie" add_icon="true" title="Get high google rankings" tab_id="1525708741945-a693b042-ea8b"][vc_column_text]Holisticly implement frictionless processes before long-term high-impact internal or "organic" sources. Seamlessly supply revolutionary results and state of the art infrastructures. Compellingly initiate an expanded array of action.[/vc_column_text][/vc_tta_section][vc_tta_section i_type="openiconic" i_icon_openiconic="vc-oi vc-oi-at" add_icon="true" title="Digital Intelligence" tab_id="1525708741984-6cdcbfd3-01fb"][vc_column_text]Monotonectally morph scalable process improvements after just in time intellectual capital. Collaboratively incentivize value-added benefits before flexible synergy. Efficiently.[/vc_column_text][/vc_tta_section][/vc_tta_accordion][vc_btn title="Get Skudo now!" style="gradient-custom" gradient_custom_color_1="__USE_THEME_MAIN_COLOR__" gradient_custom_color_2="#1ed8bc" shape="round" size="sm" align="left" link="|||" el_class="nav-to"][/vc_column][vc_column width="1/2"][vc_single_image image="9924" img_size="full" alignment="center" css_animation="zoomInUp"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Image with Lists', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['about'];
$data['custom_class'] = 'about';
$data['image_path'] = $skudo_get_directory .'images/skudo-67.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="bg_color" bg_override="ex-full" css=".vc_custom_1525710008810{padding-top: 100px !important;padding-bottom: 80px !important;}" bg_color_value="#ffffff"][vc_column width="1/2"][vc_empty_space height="20px"][vc_single_image image="9359" img_size="full" alignment="center" css_animation="zoomInUp"][/vc_column][vc_column width="1/2"][vc_custom_heading text="Highly Customizable" font_container="tag:h3|text_align:left" use_theme_fonts="yes"][vc_empty_space height="20px"][vc_custom_heading text="Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis commodo consequat." font_container="tag:p|text_align:left" use_theme_fonts="yes"][vc_empty_space height="10px"][bsf-info-box icon="linearicons-shield-check" icon_size="18" icon_color="__USE_THEME_MAIN_COLOR__" title="Nam liber tempor cum soluta nobis" el_class="use-as-lists" title_font="font_family:Poppins|font_call:Poppins|variant:regular" title_font_style="font-weight:normal;font-style:normal;" title_font_size="desktop:15px;" title_font_color="#707070"][/bsf-info-box][vc_empty_space height="10px"][bsf-info-box icon="linearicons-database-history" icon_size="18" icon_color="__USE_THEME_MAIN_COLOR__" title="Nam liber tempor cum eleifend option" el_class="use-as-lists" title_font="font_family:Poppins|font_call:Poppins|variant:regular" title_font_style="font-weight:normal;font-style:normal;" title_font_size="desktop:15px;" title_font_color="#707070"][/bsf-info-box][vc_empty_space height="10px"][bsf-info-box icon="linearicons-check" icon_size="18" icon_color="__USE_THEME_MAIN_COLOR__" title="Distinctively parallel task oriented customer" el_class="use-as-lists" title_font="font_family:Poppins|font_call:Poppins|variant:regular" title_font_style="font-weight:normal;font-style:normal;" title_font_size="desktop:15px;" title_font_color="#707070"][/bsf-info-box][vc_empty_space height="10px"][bsf-info-box icon="linearicons-signal" icon_size="18" icon_color="__USE_THEME_MAIN_COLOR__" title="Credibly predominate state of the art" el_class="use-as-lists" title_font="font_family:Poppins|font_call:Poppins|variant:regular" title_font_style="font-weight:normal;font-style:normal;" title_font_size="desktop:15px;" title_font_color="#707070"][/bsf-info-box][vc_empty_space height="20px"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Counter with 3 Col (with Background)', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['counters'];
$data['custom_class'] = 'counters';
$data['image_path'] = $skudo_get_directory .'images/skudo-66.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="image" parallax_style="vcpb-vz-jquery" bg_image_new="id^9834|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/slide-business45.jpg|caption^null|alt^null|title^slide-business45|description^null" parallax_sense="18" bg_override="full" enable_overlay="enable_overlay_value" overlay_color="rgba(34,151,189,0.8)" animation_type="h" horizontal_animation="left-animation" vertical_animation="top-animation" disable_on_mobile="disable_on_mobile_value" css=".vc_custom_1548351516289{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column][vc_row_inner][vc_column_inner width="1/3"][vc_empty_space height="20px"][stat_counter icon_size="32" icon_color="#ffffff" speed="3" counter_color_txt="#ffffff" font_size_title="18" font_size_counter="50"][ultimate_heading main_heading="PROJECTS" main_heading_color="#ffffff" sub_heading_color="#ffffff" spacer="line_only" spacer_position="middle" line_height="1" line_color="#e8e8e8" main_heading_font_family="font_family:Dosis|font_call:Dosis|variant:600" main_heading_style="font-weight:600;" main_heading_font_size="desktop:16px;" line_width="200" spacer_margin="margin-top:25px;margin-bottom:15px;"]lorem ipsum dolor sit amet cras vitae sodales eget mauris[/ultimate_heading][vc_empty_space height="20px"][/vc_column_inner][vc_column_inner width="1/3"][vc_empty_space height="20px"][stat_counter icon_size="32" icon_color="#ffffff" counter_value="500" speed="3" counter_color_txt="#ffffff" font_size_title="18" font_size_counter="50"][ultimate_heading main_heading="CLIENTS" main_heading_color="#ffffff" sub_heading_color="#ffffff" spacer="line_only" spacer_position="middle" line_height="1" line_color="#e8e8e8" main_heading_font_family="font_family:Dosis|font_call:Dosis|variant:600" main_heading_style="font-weight:600;" main_heading_font_size="desktop:16px;" line_width="200" spacer_margin="margin-top:25px;margin-bottom:15px;"]lorem ipsum dolor sit amet cras vitae sodales eget mauris[/ultimate_heading][vc_empty_space height="20px"][/vc_column_inner][vc_column_inner width="1/3"][vc_empty_space height="20px"][stat_counter icon_size="32" icon_color="#ffffff" counter_value="350" speed="3" counter_color_txt="#ffffff" font_size_title="18" font_size_counter="50"][ultimate_heading main_heading="AWARDS" main_heading_color="#ffffff" sub_heading_color="#ffffff" spacer="line_only" spacer_position="middle" line_height="1" line_color="#e8e8e8" main_heading_font_family="font_family:Dosis|font_call:Dosis|variant:600" main_heading_style="font-weight:600;" main_heading_font_size="desktop:16px;" line_width="200" spacer_margin="margin-top:25px;margin-bottom:15px;"]lorem ipsum dolor sit amet cras vitae sodales eget mauris[/ultimate_heading][vc_empty_space height="20px"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Services 3 Col (Gradient icon)', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['services'];
$data['custom_class'] = 'services';
$data['image_path'] = $skudo_get_directory .'images/skudo-65.jpg'; 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1525706162756{padding-top: 100px !important;padding-bottom: 50px !important;}" el_id="services-we-offer"][vc_column width="1/3" css=".vc_custom_1491682521219{padding-right: 30px !important;padding-left: 30px !important;}"][ult_animation_block animation="fadeInDown" animation_duration="0.5" animation_delay="0" animation_iteration_count="1"][bsf-info-box icon="linearicons-scissors" icon_size="27" icon_color="#ffffff" icon_style="square" icon_color_bg="__USE_THEME_MAIN_COLOR__" title="Visual Page Builder" read_more="more" read_text="READ MORE" hover_effect="upper_border_scale" pos="top" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:16px;"]Professionally repurpose premium rather than magnetic bandwidth extensible[/bsf-info-box][/ult_animation_block][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][/vc_column][vc_column width="1/3" css=".vc_custom_1491682528530{padding-right: 30px !important;padding-left: 30px !important;}"][ult_animation_block animation="fadeInDown" animation_duration="0.5" animation_delay="0.2" animation_iteration_count="1"][bsf-info-box icon="linearicons-laptop-phone" icon_size="27" icon_color="#ffffff" icon_style="square" icon_color_bg="__USE_THEME_MAIN_COLOR__" title="Responsive Design" read_more="more" read_text="READ MORE" hover_effect="upper_border_scale" pos="top" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:16px;"]Professionally repurpose premium rather than magnetic bandwidth extensible[/bsf-info-box][/ult_animation_block][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][/vc_column][vc_column width="1/3" css=".vc_custom_1491682544185{padding-right: 30px !important;padding-left: 30px !important;}"][ult_animation_block animation="fadeInDown" animation_duration="0.5" animation_delay="0.4" animation_iteration_count="1"][bsf-info-box icon="linearicons-gift" icon_size="27" icon_color="#ffffff" icon_style="square" icon_color_bg="__USE_THEME_MAIN_COLOR__" title="Free Support &amp; Updates" read_more="more" read_text="READ MORE" hover_effect="upper_border_scale" pos="top" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:16px;"]Professionally repurpose premium rather than magnetic bandwidth extensible[/bsf-info-box][/ult_animation_block][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][/vc_column][/vc_row][vc_row css=".vc_custom_1525705507031{padding-bottom: 100px !important;}"][vc_column width="1/3" css=".vc_custom_1491682521219{padding-right: 30px !important;padding-left: 30px !important;}"][ult_animation_block animation="fadeInDown" animation_duration="0.5" animation_delay="0" animation_iteration_count="1"][bsf-info-box icon="linearicons-scissors" icon_size="27" icon_color="#ffffff" icon_style="square" icon_color_bg="__USE_THEME_MAIN_COLOR__" title="Visual Page Builder" read_more="more" read_text="READ MORE" hover_effect="upper_border_scale" pos="top" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:16px;"]Professionally repurpose premium rather than magnetic bandwidth extensible[/bsf-info-box][/ult_animation_block][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][/vc_column][vc_column width="1/3" css=".vc_custom_1491682528530{padding-right: 30px !important;padding-left: 30px !important;}"][ult_animation_block animation="fadeInDown" animation_duration="0.5" animation_delay="0.2" animation_iteration_count="1"][bsf-info-box icon="linearicons-laptop-phone" icon_size="27" icon_color="#ffffff" icon_style="square" icon_color_bg="__USE_THEME_MAIN_COLOR__" title="Responsive Design" read_more="more" read_text="READ MORE" hover_effect="upper_border_scale" pos="top" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:16px;"]Professionally repurpose premium rather than magnetic bandwidth extensible[/bsf-info-box][/ult_animation_block][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][/vc_column][vc_column width="1/3" css=".vc_custom_1491682544185{padding-right: 30px !important;padding-left: 30px !important;}"][ult_animation_block animation="fadeInDown" animation_duration="0.5" animation_delay="0.4" animation_iteration_count="1"][bsf-info-box icon="linearicons-gift" icon_size="27" icon_color="#ffffff" icon_style="square" icon_color_bg="__USE_THEME_MAIN_COLOR__" title="Free Support &amp; Updates" read_more="more" read_text="READ MORE" hover_effect="upper_border_scale" pos="top" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:16px;"]Professionally repurpose premium rather than magnetic bandwidth extensible[/bsf-info-box][/ult_animation_block][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Text with image', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['about'];
$data['custom_class'] = 'about';
$data['image_path'] = $skudo_get_directory .'images/skudo-64.jpg'; 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1525705966135{padding-top: 50px !important;padding-bottom: 50px !important;}"][vc_column width="1/2" el_class="add-side-paddings-box" css=".vc_custom_1525705911767{padding-left: 15px !important;}"][ult_animation_block animation="fadeInUp" animation_duration="1" animation_delay="0.3" animation_iteration_count="1"][vc_empty_space height="80px"][vc_custom_heading text="Design, Code &amp; Marketing" font_container="tag:h3|text_align:left|color:__USE_THEME_MAIN_COLOR__" use_theme_fonts="yes"][vc_empty_space height="20px"][vc_column_text]Authoritatively productivate proactive e-markets without magnetic experiences. Intrinsicly pontificate timely systems via multimedia based niche markets. Progressively strategize accurate products and functional solutions.[/vc_column_text][vc_empty_space height="40px"][vc_btn title="Services we offer" style="gradient-custom" gradient_custom_color_1="__USE_THEME_MAIN_COLOR__" gradient_custom_color_2="#1ed8bc" shape="round" size="sm" align="left" link="url:%23services-we-offer|||" el_class="nav-to"][vc_empty_space height="30px"][/ult_animation_block][/vc_column][vc_column width="1/2"][vc_single_image image="9921" img_size="full" alignment="right"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Image + Services (3 Col)', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['services'];
$data['custom_class'] = 'services';
$data['image_path'] = $skudo_get_directory .'images/skudo-63.jpg'; 
$data['content'] = <<<CONTENT
[vc_row equal_height="yes" content_placement="middle" bg_type="grad" bg_override="ex-full" css=".vc_custom_1525694680783{padding-top: 120px !important;padding-bottom: 100px !important;}" bg_grad="background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #42BADE), color-stop(99%, #033180));background: -moz-linear-gradient(top,#42BADE 0%,#033180 99%);background: -webkit-linear-gradient(top,#42BADE 0%,#033180 99%);background: -o-linear-gradient(top,#42BADE 0%,#033180 99%);background: -ms-linear-gradient(top,#42BADE 0%,#033180 99%);background: linear-gradient(top,#42BADE 0%,#033180 99%);"][vc_column][vc_row_inner css=".vc_custom_1505769892377{margin-top: -400px !important;}"][vc_column_inner][vc_single_image image="9728" img_size="full" alignment="center"][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][ult_animation_block animation="fadeInUp" animation_duration="1" animation_delay="0" animation_iteration_count="1" opacity_start_effect="80"][vc_row_inner css=".vc_custom_1505770520084{margin-bottom: 20px !important;}"][vc_column_inner width="1/3"][bsf-info-box icon="linearicons-surveillance" icon_size="40" icon_color="#ffffff" title="Premium Design" pos="left" el_class="no-letter-spacing" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:20px;" title_font_color="#ffffff" desc_font_line_height="desktop:21px;" desc_font_color="#9abad8" desc_font_size="desktop:14px;"]Credibly communicate competitive initiatives before competitive client centered relationships.[/bsf-info-box][/vc_column_inner][vc_column_inner width="1/3"][bsf-info-box icon="linearicons-rocket" icon_size="40" icon_color="#ffffff" title="Fast Edition" pos="left" el_class="no-letter-spacing" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:20px;" title_font_color="#ffffff" desc_font_line_height="desktop:21px;" desc_font_color="#9abad8" desc_font_size="desktop:14px;"]Credibly communicate competitive initiatives before competitive client centered relationships.[/bsf-info-box][ultimate_spacer height="0" height_on_mob_landscape="40" height_on_mob="40"][/vc_column_inner][vc_column_inner width="1/3"][bsf-info-box icon="linearicons-laptop-phone" icon_size="40" icon_color="#ffffff" title="Fully Responsive Design" pos="left" el_class="no-letter-spacing" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:20px;" title_font_color="#ffffff" desc_font_line_height="desktop:21px;" desc_font_color="#9abad8" desc_font_size="desktop:14px;"]Credibly communicate competitive initiatives before competitive client centered relationships.[/bsf-info-box][ultimate_spacer height="0" height_on_mob_landscape="20" height_on_mob="20"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/3"][bsf-info-box icon="linearicons-archery" icon_size="40" icon_color="#ffffff" title="Everything you need" pos="left" el_class="no-letter-spacing" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:20px;" title_font_color="#ffffff" desc_font_line_height="desktop:21px;" desc_font_color="#9abad8" desc_font_size="desktop:14px;"]Credibly communicate competitive initiatives before competitive client centered relationships.[/bsf-info-box][/vc_column_inner][vc_column_inner width="1/3"][bsf-info-box icon="linearicons-planet" icon_size="40" icon_color="#ffffff" title="WPML Ready" pos="left" el_class="no-letter-spacing" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" desc_font="font_family:|font_call:" desc_font_style="font-weight:600;" title_font_size="desktop:20px;" title_font_color="#ffffff" desc_font_line_height="desktop:21px;" desc_font_color="#9abad8" desc_font_size="desktop:14px;"]Credibly communicate competitive initiatives before competitive client centered relationships.[/bsf-info-box][ultimate_spacer height="0" height_on_mob_landscape="40" height_on_mob="40"][/vc_column_inner][vc_column_inner width="1/3"][bsf-info-box icon="linearicons-fingers-scroll-horizontal" icon_size="40" icon_color="#ffffff" title="Swipe Enable" pos="left" el_class="no-letter-spacing" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" desc_font="font_family:|font_call:" title_font_size="desktop:20px;" title_font_color="#ffffff" desc_font_line_height="desktop:21px;" desc_font_color="#9abad8" desc_font_size="desktop:14px;"]Credibly communicate competitive initiatives before competitive client centered relationships.[/bsf-info-box][ultimate_spacer height="0" height_on_mob_landscape="40" height_on_mob="40"][/vc_column_inner][/vc_row_inner][/ult_animation_block][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( '4 Columns Counters', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['counters'];
$data['custom_class'] = 'counters';
$data['image_path'] = $skudo_get_directory .'images/skudo-62.jpg'; 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1505756626076{padding-top: 120px !important;padding-bottom: 120px !important;}"][vc_column][vc_custom_heading text="Why Skudo is Better?" font_container="tag:h3|text_align:center" use_theme_fonts="yes"][vc_empty_space height="20px"][vc_row_inner][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text]</p>
<p style="text-align: center;">Credibly myocardinate cutting-edge e-tailers with alternative catalysts for enable extensive benefits.</p>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][vc_row_inner][vc_column_inner width="1/4"][vc_pie value="25" color="custom" units="%" custom_color="__USE_THEME_MAIN_COLOR__"][vc_empty_space height="20px"][vc_custom_heading text="More Languages" font_container="tag:h5|text_align:center" use_theme_fonts="yes"][vc_column_text]</p>
<p style="text-align: center;">Continually incubate functional services whereas.</p>
<p>[/vc_column_text][ultimate_spacer height="0" height_on_mob_landscape="60" height_on_mob="60"][/vc_column_inner][vc_column_inner width="1/4"][vc_pie value="55" color="custom" units="%" custom_color="__USE_THEME_MAIN_COLOR__"][vc_empty_space height="20px"][vc_custom_heading text="More Customizable" font_container="tag:h5|text_align:center" use_theme_fonts="yes"][vc_column_text]</p>
<p style="text-align: center;">Continually incubate functional services whereas.</p>
<p>[/vc_column_text][ultimate_spacer height="0" height_on_mob_landscape="60" height_on_mob="60"][/vc_column_inner][vc_column_inner width="1/4"][vc_pie value="60" color="custom" units="%" custom_color="__USE_THEME_MAIN_COLOR__"][vc_empty_space height="20px"][vc_custom_heading text="More Faster" font_container="tag:h5|text_align:center" use_theme_fonts="yes"][vc_column_text]</p>
<p style="text-align: center;">Continually incubate functional services whereas.</p>
<p>[/vc_column_text][ultimate_spacer height="0" height_on_mob_landscape="60" height_on_mob="60"][/vc_column_inner][vc_column_inner width="1/4"][vc_pie value="85" color="custom" units="%" custom_color="__USE_THEME_MAIN_COLOR__"][vc_empty_space height="20px"][vc_custom_heading text="More Secure" font_container="tag:h5|text_align:center" use_theme_fonts="yes"][vc_column_text]</p>
<p style="text-align: center;">Continually incubate functional services whereas.</p>
<p>[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="280px"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Flip Box + Background', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-61.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="image" parallax_style="vcpb-vz-jquery" bg_image_new="id^9720|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/slide-business42.jpg|caption^null|alt^null|title^slide-business42|description^null" bg_image_repeat="no-repeat" bg_override="ex-full" css=".vc_custom_1548351556363{padding-top: 120px !important;padding-bottom: 75px !important;}"][vc_column width="1/2"][/vc_column][vc_column width="1/2"][ult_animation_block animation="fadeInUp" animation_duration="1" animation_delay="0.3" animation_iteration_count="1"][vc_row_inner][vc_column_inner width="1/2"][icon_counter border_size="1" border_color="__USE_THEME_MAIN_COLOR__" icon="linearicons-power" icon_size="38" icon_color="#ffffff" text_color="#ffffff" bg_color="__USE_THEME_MAIN_COLOR__" block_title_front="Fully Featured" block_title_back="Fully Featured" block_desc_back="Compellingly reinvent schemas rather than enterprise systems enthusiastically" cont_align="on" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" desc_font="font_family:Open Sans|font_call:Open+Sans" desc_font_style="font-weight:500;" title_font_size="desktop:16px;" desc_font_size="desktop:12px;" desc_font_line_height="desktop:20px;"][/vc_column_inner][vc_column_inner width="1/2"][icon_counter border_size="1" border_color="#ff8b6f" icon="linearicons-pointer-up" icon_size="38" icon_color="#ffffff" text_color="#ffffff" bg_color="#ff8b6f" block_title_front="Swipe Nav" block_title_back="Swipe Nav" block_desc_back="Compellingly reinvent 24/365 schemas rather than enterprise systems enthusiastically" cont_align="on" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" desc_font="font_family:Open Sans|font_call:Open+Sans" desc_font_style="font-weight:500;" title_font_size="desktop:17px;" desc_font_size="desktop:12px;" desc_font_line_height="desktop:20px;"][/vc_column_inner][/vc_row_inner][vc_empty_space height="15px"][/ult_animation_block][ult_animation_block animation="fadeInUp" animation_duration="1" animation_delay="0.3" animation_iteration_count="1"][vc_row_inner][vc_column_inner width="1/2"][icon_counter border_size="1" border_color="#3b6f90" icon="linearicons-gift" icon_size="38" icon_color="#ffffff" text_color="#ffffff" bg_color="#3b6f90" block_title_front="Premium Plugins" block_title_back="Premium Plugins" block_desc_back="Compellingly reinvent schemas rather than enterprise systems enthusiastically" cont_align="on" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" desc_font="font_family:Open Sans|font_call:Open+Sans" desc_font_style="font-weight:500;" title_font_size="desktop:17px;" desc_font_size="desktop:12px;" desc_font_line_height="desktop:20px;" title_font_line_height="desktop:12px;"][/vc_column_inner][vc_column_inner width="1/2"][icon_counter border_size="1" border_color="#abbfce" icon="linearicons-file-code" icon_size="38" icon_color="#ffffff" text_color="#ffffff" bg_color="#abbfce" block_title_front="Clean Code" block_title_back="Clean Code" block_desc_back="Compellingly reinvent 24/365 schemas rather than enterprise systems enthusiastically" cont_align="on" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" desc_font="font_family:Open Sans|font_call:Open+Sans" desc_font_style="font-weight:500;" title_font_size="desktop:17px;" desc_font_size="desktop:12px;" desc_font_line_height="desktop:20px;"][/vc_column_inner][/vc_row_inner][/ult_animation_block][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Team Member with Info', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['team'];
$data['custom_class'] = 'team';
$data['image_path'] = $skudo_get_directory .'images/skudo-60.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="bg_color" bg_override="ex-full" css=".vc_custom_1492114420041{padding-top: 100px !important;padding-bottom: 100px !important;}" bg_color_value="#ffffff"][vc_column width="1/2"][vc_single_image image="9643" img_size="full" css_animation="fadeInUp"][/vc_column][vc_column width="1/2"][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][vc_custom_heading text="Maria Shaptov" use_theme_fonts="yes"][vc_custom_heading text="Communication &amp; Marketing" font_container="tag:h4|text_align:left|color:__USE_THEME_MAIN_COLOR__" use_theme_fonts="yes" el_class="no-letter-spacing"][vc_empty_space height="30px"][vc_column_text]Distinctively customize leveraged relationships before market-driven markets. Efficiently leverage other's premium benefits with customer directed relationships. Compellingly productize B2C testing procedures before adaptive leadership. Seamlessly.[/vc_column_text][vc_empty_space height="60px"][vc_progress_bar bgcolor="custom" custombgcolor="#101010" customtxtcolor="#333333"][vc_empty_space height="10px"][just_icon icon="Defaults-twitter" icon_size="12" icon_color="#ffffff" icon_style="circle" icon_color_bg="__USE_THEME_MAIN_COLOR__" icon_link="url:%23|||" icon_animation="fadeInUp" icon_align="left" el_class="align-icon-left"][just_icon icon="Defaults-facebook facebook-f" icon_size="12" icon_color="#ffffff" icon_style="circle" icon_color_bg="__USE_THEME_MAIN_COLOR__" icon_link="url:%23|||" icon_animation="fadeInUp" icon_align="left" el_class="align-icon-left"][just_icon icon="Defaults-linkedin" icon_size="12" icon_color="#ffffff" icon_style="circle" icon_color_bg="__USE_THEME_MAIN_COLOR__" icon_link="url:%23|||" icon_animation="fadeInUp" icon_align="left" el_class="align-icon-left"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Team 3 Columns (with Hover)', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['team'];
$data['custom_class'] = 'team';
$data['image_path'] = $skudo_get_directory .'images/skudo-57.jpg'; 
$data['content'] = <<<CONTENT
[vc_row equal_height="yes" content_placement="top" bg_type="bg_color" seperator_enable="seperator_enable_value" seperator_type="xlarge_triangle_left_seperator" seperator_position="top_bottom_seperator" seperator_svg_height="80" seperator_shape_background="#ffffff" bg_color_value="#ffffff" css=".vc_custom_1528470146697{padding-top: 50px !important;padding-bottom: 50px !important;}"][vc_column width="1/3"][ult_team team_member_style="style-2" team_img_bg_color="#051321" team_img_opacity="1" team_img_hover_opacity="0.2" team_member_align_style="left" social_icon_effect="on" social_links="%5B%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-xing-square%22%2C%22social_icon_color%22%3A%22%23ffffff%22%2C%22social_icon_hover_color%22%3A%22%2320c3c9%22%7D%2C%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-twitter-square%22%2C%22social_icon_color%22%3A%22%23ffffff%22%2C%22social_icon_hover_color%22%3A%22%2320c3c9%22%7D%2C%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-behance-square%22%2C%22social_icon_color%22%3A%22%23ffffff%22%2C%22social_icon_hover_color%22%3A%22rgba(255%2C255%2C255%2C0.5)%22%7D%5D" divider_effect="" title_text_typography="" team_member_name_font="font_family:Poppins|font_call:Poppins|variant:500" team_member_name_font_style="font-weight:500;" team_member_name_color="#ffffff" team_member_position_font="font_family:Poppins|font_call:Poppins|variant:600" team_member_position_font_style="font-weight:600;" team_member_org_color="rgba(255,255,255,0.5)" team_member_responsive_enable="" image="id^9643|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/team-grid1-1.jpg|caption^null|alt^null|title^team-grid1|description^null" name="Nina Soraia" pos_in_org="Finances" title_box_padding="padding:30px;" team_member_name_font_size="desktop:26px;" team_member_position_font_size="desktop:14px;"][/ult_team][/vc_column][vc_column width="1/3"][ult_team team_member_style="style-2" team_img_bg_color="#051321" team_img_opacity="1" team_img_hover_opacity="0.2" team_member_align_style="left" social_icon_effect="on" social_links="%5B%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-pinterest-square%22%2C%22social_icon_color%22%3A%22%23ffffff%22%2C%22social_icon_hover_color%22%3A%22rgba(255%2C255%2C255%2C0.5)%22%7D%2C%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-vimeo-square%22%2C%22social_icon_color%22%3A%22%23ffffff%22%2C%22social_icon_hover_color%22%3A%22rgba(255%2C255%2C255%2C0.5)%22%7D%2C%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-pied-piper%22%2C%22social_icon_color%22%3A%22%23ffffff%22%2C%22social_icon_hover_color%22%3A%22rgba(255%2C255%2C255%2C0.5)%22%7D%5D" divider_effect="" title_text_typography="" team_member_name_font="font_family:Poppins|font_call:Poppins|variant:500" team_member_name_font_style="font-weight:500;" team_member_name_color="#ffffff" team_member_position_font="font_family:Poppins|font_call:Poppins|variant:600" team_member_position_font_style="font-weight:600;" team_member_org_color="rgba(255,255,255,0.5)" team_member_responsive_enable="" image="id^9647|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/team-grid5-1.jpg|caption^null|alt^null|title^team-grid5|description^null" name="Joana Doe" pos_in_org="Public Relations" title_box_padding="padding:30px;" team_member_name_font_size="desktop:26px;" team_member_position_font_size="desktop:14px;"][/ult_team][/vc_column][vc_column width="1/3"][ult_team team_member_style="style-2" team_img_bg_color="#3a0b24" team_img_opacity="1" team_img_hover_opacity="0.2" team_member_align_style="left" social_icon_effect="on" social_links="%5B%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-youtube-square%22%2C%22social_icon_color%22%3A%22%23ffffff%22%2C%22social_icon_hover_color%22%3A%22rgba(255%2C255%2C255%2C0.5)%22%7D%2C%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-foursquare%22%2C%22social_icon_color%22%3A%22%23ffffff%22%2C%22social_icon_hover_color%22%3A%22rgba(255%2C255%2C255%2C0.5)%22%7D%2C%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-maxcdn%22%2C%22social_icon_color%22%3A%22%23ffffff%22%2C%22social_icon_hover_color%22%3A%22rgba(255%2C255%2C255%2C0.5)%22%7D%5D" divider_effect="" title_text_typography="" team_member_name_font="font_family:Poppins|font_call:Poppins|variant:500" team_member_name_font_style="font-weight:500;" team_member_name_color="#ffffff" team_member_position_font="font_family:Poppins|font_call:Poppins|variant:600" team_member_position_font_style="font-weight:600;" team_member_org_color="rgba(255,255,255,0.5)" team_member_responsive_enable="" image="id^9648|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/team-grid6-1.jpg|caption^null|alt^null|title^team-grid6|description^null" name="Manuel Politiama" pos_in_org="Help & Support" title_box_padding="padding:30px;" team_member_name_font_size="desktop:26px;" team_member_position_font_size="desktop:14px;"][/ult_team][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Team 3 Columns (with Scroller)', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['team'];
$data['custom_class'] = 'team';
$data['image_path'] = $skudo_get_directory .'images/skudo-56.jpg'; 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1528470243720{padding-top: 100px !important;padding-bottom: 120px !important;}"][vc_column][cubeportfolio id="76"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Team 4 Columns', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['team'];
$data['custom_class'] = 'team';
$data['image_path'] = $skudo_get_directory .'images/skudo-55.jpg'; 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1528469138368{padding-top: 100px !important;}"][vc_column][cubeportfolio id="75"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Testimonials + Partners with Scroller', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'testimonials';
$data['image_path'] = $skudo_get_directory .'images/skudo-54.jpg'; 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1472484771837{margin-top: 80px !important;margin-bottom: 80px !important;}"][vc_column width="2/3"][vc_custom_heading text="Clients Feedback" font_container="tag:h3|text_align:left" use_theme_fonts="yes"][vc_empty_space height="30px"][testimonials testimonials_cats="dark-text" number="5"][/vc_column][vc_column width="1/3"][vc_custom_heading text="Our Partners" font_container="tag:h3|text_align:left" use_theme_fonts="yes"][vc_empty_space height="30px"][vc_row_inner css=".vc_custom_1472502318881{margin-right: 0px !important;margin-left: 0px !important;padding-top: 2px !important;padding-right: 2px !important;padding-bottom: 2px !important;padding-left: 2px !important;background-color: #f7f7f7 !important;}"][vc_column_inner][partners des_partners_owl_animation_speed="3500" des_partners_owl_items_desktop="1" des_partners_owl_items_small_desktop="1" des_partners_owl_items_tablet="1" des_partners_owl_navigation="no" des_partners_owl_height="180" row_height="171" partners_cats="dark-logos" inner_border_color="#efefef" number="5"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Title with Services + Background', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['about'];
$data['custom_class'] = 'about';
$data['image_path'] = $skudo_get_directory .'images/skudo-53.jpg'; 
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" bg_type="image" parallax_style="vcpb-default" bg_image_new="id^9127|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/04/slide-business4.jpg|caption^null|alt^null|title^slide-business4|description^null" bg_image_repeat="no-repeat" bg_override="ex-full" enable_overlay="enable_overlay_value" overlay_color="rgba(0,0,0,0.4)" css=".vc_custom_1548351671576{padding-top: 220px !important;padding-bottom: 300px !important;}"][vc_column][vc_custom_heading text="We Believe in Quality Design" font_container="tag:h2|font_size:46px|text_align:center|color:%23ffffff|line_height:56px" use_theme_fonts="yes"][vc_column_text]</p>
<h5 style="text-align: center;"><span style="color: #f2f2f2;">Holisticly create resource maximizing innovation and tactical.</span></h5>
<p>[/vc_column_text][/vc_column][/vc_row][vc_row el_class="home-corp1"][vc_column width="1/3" css=".vc_custom_1462377799344{margin-right: 20px !important;}"][ult_content_box bg_color="#5467a9" box_shadow="horizontal:0px|vertical:0px|blur:2px|spread:2px|color:rgba(237,237,237,0.5)|style:none|" padding="padding-top:50px;padding-right:30px;padding-bottom:5px;padding-left:30px;" min_height="250" hover_box_shadow="horizontal:px|vertical:px|blur:px|spread:px|color:#f7f7f7|style:none|" hover_bg_color="#5467a9"][just_icon icon="linearicons-question" icon_size="65" icon_color="#ffffff"][vc_empty_space height="20px"][vc_custom_heading text="Pre-Sale Questions" font_container="tag:h4|text_align:center|color:%23dfe3ef" use_theme_fonts="yes"][vc_custom_heading text="Prospective for commun generate economically sound infrastructures before process." font_container="tag:p|font_size:15px|text_align:center|color:%23f9f9f9|line_height:25px" use_theme_fonts="yes"][vc_empty_space height="20px"][vc_btn title="CONTACT US" style="outline-custom" outline_custom_color="#a3aed8" outline_custom_hover_background="#a3aed8" outline_custom_hover_text="#ffffff" size="xs" align="center"][/ult_content_box][/vc_column][vc_column width="1/3"][ult_content_box bg_color="#54c5a2" box_shadow="horizontal:0px|vertical:0px|blur:2px|spread:2px|color:rgba(237,237,237,0.5)|style:none|" padding="padding-top:50px;padding-right:30px;padding-bottom:5px;padding-left:30px;" min_height="250" hover_box_shadow="horizontal:px|vertical:px|blur:px|spread:px|color:#f7f7f7|style:none|" hover_bg_color="#54c5a2"][just_icon icon="linearicons-lifebuoy" icon_size="62" icon_color="#ffffff"][vc_empty_space height="20px"][vc_custom_heading text="Help &amp; Support" font_container="tag:h4|text_align:center|color:%2332846a" use_theme_fonts="yes"][vc_custom_heading text="Prospective for commun generate economically sound infrastructures before process." font_container="tag:p|font_size:15px|text_align:center|color:%23f9f9f9|line_height:25px" use_theme_fonts="yes"][vc_empty_space height="20px"][vc_btn title="LOGIN TO SUPPORT" style="outline-custom" outline_custom_color="#32846a" outline_custom_hover_background="#32846a" outline_custom_hover_text="#ffffff" size="xs" align="center"][/ult_content_box][/vc_column][vc_column width="1/3"][ult_content_box bg_color="#5bc2da" box_shadow="horizontal:0px|vertical:0px|blur:2px|spread:2px|color:rgba(237,237,237,0.5)|style:none|" padding="padding-top:50px;padding-right:30px;padding-bottom:5px;padding-left:30px;" min_height="250" hover_box_shadow="horizontal:px|vertical:px|blur:px|spread:px|color:#f7f7f7|style:none|" hover_bg_color="#5bc2da"][just_icon icon="linearicons-pencil-ruler2" icon_size="62" icon_color="#ffffff"][vc_empty_space height="20px"][vc_custom_heading text="Customizations" font_container="tag:h4|text_align:center|color:%23388394" use_theme_fonts="yes"][vc_custom_heading text="Prospective for commun generate economically sound infrastructures before process." font_container="tag:p|font_size:15px|text_align:center|color:%23f9f9f9|line_height:25px" use_theme_fonts="yes"][vc_empty_space height="20px"][vc_btn title="REQUEST A QUOTE" style="outline-custom" outline_custom_color="#388394" outline_custom_hover_background="#388394" outline_custom_hover_text="#ffffff" size="xs" align="center"][/ult_content_box][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Team without Scroller', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['team'];
$data['custom_class'] = 'team';
$data['image_path'] = $skudo_get_directory .'images/skudo-52.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="bg_color" bg_override="ex-full" bg_color_value="#f4f4f4" css=".vc_custom_1492103332580{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column][vc_custom_heading text="Meet the Team" font_container="tag:h2|text_align:center" use_theme_fonts="yes" el_class="no-letter-spacing"][vc_custom_heading text="A full stack of nerds!" font_container="tag:p|font_size:15px|text_align:center|color:%23808080" use_theme_fonts="yes" el_class="no-letter-spacing"][vc_empty_space height="60px"][ult_ihover thumb_shape="square" thumb_height_width="300" gutter_width="60" align="left"][ult_ihover_item title="Jonh Doe" thumb_img="id^9648|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/team-grid6-1.jpg|caption^null|alt^null|title^team-grid6|description^null" hover_effect="effect10" desc_font_color="#ffffff" info_color_bg="__USE_THEME_MAIN_COLOR__" block_border_color="rgba(255,255,255,0.2)" block_border_size="0" spacer_width="100" spacer_border_width="1" title_font_size="22" title_font_line_height="28" desc_font_size="12" desc_font_line_height="18" title_responsive_font_size="desktop:22px;" title_responsive_line_height="desktop:28px;" desc_responsive_font_size="desktop:12px;" desc_responsive_line_height="desktop:18px;"]Yap. the Boss![/ult_ihover_item][ult_ihover_item title="João Garcia" thumb_img="id^9644|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/team-grid2-1.jpg|caption^null|alt^null|title^team-grid2|description^null" hover_effect="effect10" desc_font_color="#ffffff" info_color_bg="__USE_THEME_MAIN_COLOR__" block_border_color="rgba(255,255,255,0.2)" block_border_size="0" spacer_width="100" spacer_border_width="1" title_font_size="22" title_font_line_height="28" desc_font_size="12" desc_font_line_height="18" title_responsive_font_size="desktop:22px;" title_responsive_line_height="desktop:28px;" desc_responsive_font_size="desktop:12px;" desc_responsive_line_height="desktop:18px;"]Senior Developer[/ult_ihover_item][ult_ihover_item title="Paulo Moreira" thumb_img="id^9646|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/team-grid4-1.jpg|caption^null|alt^null|title^team-grid4|description^null" hover_effect="effect10" desc_font_color="#ffffff" info_color_bg="__USE_THEME_MAIN_COLOR__" block_border_color="rgba(255,255,255,0.2)" block_border_size="0" spacer_width="100" spacer_border_width="1" title_font_size="22" title_font_line_height="28" desc_font_size="12" desc_font_line_height="18" title_responsive_font_size="desktop:22px;" title_responsive_line_height="desktop:28px;" desc_responsive_font_size="desktop:12px;" desc_responsive_line_height="desktop:18px;"]Senior Designer[/ult_ihover_item][/ult_ihover][ult_ihover thumb_shape="square" thumb_height_width="300" gutter_width="60" align="left"][ult_ihover_item title="Nina Soraia" thumb_img="id^9643|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/team-grid1-1.jpg|caption^null|alt^null|title^team-grid1|description^null" hover_effect="effect10" desc_font_color="#ffffff" info_color_bg="__USE_THEME_MAIN_COLOR__" block_border_color="rgba(255,255,255,0.2)" block_border_size="0" spacer_width="100" spacer_border_width="1" title_font_size="22" title_font_line_height="28" desc_font_size="12" desc_font_line_height="18" title_responsive_font_size="desktop:22px;" title_responsive_line_height="desktop:28px;" desc_responsive_font_size="desktop:12px;" desc_responsive_line_height="desktop:18px;"]Communication &amp; Marketing[/ult_ihover_item][ult_ihover_item title="Hopty Bull" thumb_img="id^9647|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/team-grid5-1.jpg|caption^null|alt^null|title^team-grid5|description^null" hover_effect="effect10" desc_font_color="#ffffff" info_color_bg="__USE_THEME_MAIN_COLOR__" block_border_color="rgba(255,255,255,0.2)" block_border_size="0" spacer_width="100" spacer_border_width="1" title_font_size="22" title_font_line_height="28" desc_font_size="12" desc_font_line_height="18" title_responsive_font_size="desktop:22px;" title_responsive_line_height="desktop:28px;" desc_responsive_font_size="desktop:12px;" desc_responsive_line_height="desktop:18px;"]Developer[/ult_ihover_item][ult_ihover_item title="Maria Shaptrov" thumb_img="id^9645|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/team-grid3-1.jpg|caption^null|alt^null|title^team-grid3|description^null" hover_effect="effect10" desc_font_color="#ffffff" info_color_bg="__USE_THEME_MAIN_COLOR__" block_border_color="rgba(255,255,255,0.2)" block_border_size="0" spacer_width="100" spacer_border_width="1" title_font_size="22" title_font_line_height="28" desc_font_size="12" desc_font_line_height="18" title_responsive_font_size="desktop:22px;" title_responsive_line_height="desktop:28px;" desc_responsive_font_size="desktop:12px;" desc_responsive_line_height="desktop:18px;"]Help &amp; Support Team[/ult_ihover_item][/ult_ihover][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Text with Counters + Background', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['counters'];
$data['custom_class'] = 'counters';
$data['image_path'] = $skudo_get_directory .'images/skudo-51.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="image" parallax_style="vcpb-vz-jquery" bg_image_new="id^10933|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/revslider/home8/slide-business33.jpg|caption^null|alt^null|title^slide-business33.jpg|description^null" bg_override="ex-full" css=".vc_custom_1548351869068{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column width="2/3" el_class="wide-box-mobile"][vc_custom_heading text="We're Skudo Agency" use_theme_fonts="yes" el_class="no-letter-spacing"][vc_empty_space height="20px"][vc_column_text]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacus metus, convallis ut leo nec, tincidunt eleifend justo. Ut felis orci, hendrerit a pulvinar et, gravida ac lorem. Sed vitae molestie sapien, at sollicitudin tortor.</p>
<p>Duis id volutpat libero, id vestibulum purus.Donec euismod accumsan felis,<a href="#">egestas lobortis velit tempor</a> vitae. Integer eget velit fermentum, dignissim odio non, bibendum velit.[/vc_column_text][vc_empty_space height="40px"][ult_animation_block animation="fadeInUp" animation_duration="0.5" animation_delay="" animation_iteration_count="1" opacity_start_effect="80"][vc_row_inner][vc_column_inner width="1/3"][stat_counter icon="linearicons-timer2" icon_size="35" icon_color="__USE_THEME_MAIN_COLOR__" icon_position="left" counter_title="WORK HOURS" counter_sep="" speed="3" title_font="font_family:Quicksand|font_call:Quicksand|variant:500" title_font_style="font-weight:500;" counter_color_txt="#bcbcbc" desc_font="font_family:Dosis|font_call:Dosis|variant:600" desc_font_style="font-weight:600;" font_size_title="12" font_size_counter="58" title_font_size="desktop:10px;" desc_font_size="desktop:30px;" desc_font_color="#303030" title_font_line_height="desktop:12px;"][/vc_column_inner][vc_column_inner width="1/3"][stat_counter icon="linearicons-presentation" icon_size="35" icon_color="__USE_THEME_MAIN_COLOR__" icon_position="left" counter_title="FINISHED WORKS" counter_value="340" counter_sep="" speed="3" title_font="font_family:Quicksand|font_call:Quicksand|variant:500" title_font_style="font-weight:500;" counter_color_txt="#bcbcbc" desc_font="font_family:Dosis|font_call:Dosis|variant:600" desc_font_style="font-weight:600;" font_size_title="12" font_size_counter="58" title_font_size="desktop:10px;" desc_font_size="desktop:30px;" desc_font_color="#303030" title_font_line_height="desktop:12px;"][/vc_column_inner][vc_column_inner width="1/3"][stat_counter icon="linearicons-share2" icon_size="35" icon_color="__USE_THEME_MAIN_COLOR__" icon_position="left" counter_title="TWITTER FOLLOWERS" counter_value="5430" counter_sep="" speed="3" title_font="font_family:Quicksand|font_call:Quicksand|variant:500" title_font_style="font-weight:500;" counter_color_txt="#bcbcbc" desc_font="font_family:Dosis|font_call:Dosis|variant:600" desc_font_style="font-weight:600;" font_size_title="12" font_size_counter="58" title_font_size="desktop:10px;" desc_font_size="desktop:30px;" desc_font_color="#303030" title_font_line_height="desktop:12px;"][/vc_column_inner][/vc_row_inner][/ult_animation_block][/vc_column][vc_column width="1/3" el_class="wide-box-mobile"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Text + Counters 2 col (at Right)', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['counters'];
$data['custom_class'] = 'counters';
$data['image_path'] = $skudo_get_directory .'images/skudo-50.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="image" parallax_style="vcpb-vz-jquery" bg_image_new="id^9834|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/slide-business45.jpg|caption^null|alt^null|title^slide-business45|description^null" bg_image_repeat="no-repeat" bg_override="ex-full" enable_overlay="enable_overlay_value" overlay_color="rgba(30,115,190,0.88)" css=".vc_custom_1548351913458{padding-top: 120px !important;padding-bottom: 120px !important;}"][vc_column width="1/2"][ult_animation_block animation="slideInUp" animation_duration="1" animation_delay="0.3" animation_iteration_count="1"][vc_custom_heading text="Modern Theme<br />
Easy to Work and Setup" font_container="tag:h3|text_align:left|color:%23ffffff" use_theme_fonts="yes"][vc_empty_space height="10px"][vc_custom_heading text="Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis commodo consequat." font_container="tag:p|text_align:left|color:rgba(255%2C255%2C255%2C0.5)" use_theme_fonts="yes"][vc_empty_space height="15px"][vc_btn title="REQUEST A QUOTE TODAY!" style="outline-custom" outline_custom_color="#ffffff" outline_custom_hover_background="#ffffff" outline_custom_hover_text="#43b8de" shape="round" size="sm" align="left" link="|||" el_class="nav-to"][/ult_animation_block][/vc_column][vc_column width="1/2"][ult_animation_block animation="slideInRight" animation_duration="1" animation_delay="0.3" animation_iteration_count="1"][vc_row_inner][vc_column_inner width="1/2"][vc_pie value="75" color="custom" units="%" custom_color="#c1f2f2"][vc_empty_space height="20px"][vc_custom_heading text="FASTER" font_container="tag:h4|text_align:center|color:%23ffffff" use_theme_fonts="yes"][ultimate_spacer height="0" height_on_mob_landscape="60" height_on_mob="60"][/vc_column_inner][vc_column_inner width="1/2"][vc_pie value="95" color="custom" units="%" custom_color="#c1f2f2"][vc_empty_space height="20px"][vc_custom_heading text="CUSTOMIZABLE" font_container="tag:h4|text_align:center|color:%23ffffff" use_theme_fonts="yes"][ultimate_spacer height="0" height_on_mob_landscape="60" height_on_mob="60"][/vc_column_inner][/vc_row_inner][/ult_animation_block][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);


$data = array();
$data['name'] = __( 'Team Members + Counters', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['team'];
$data['custom_class'] = 'team';
$data['image_path'] = $skudo_get_directory .'images/skudo-49.jpg'; 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1525534582496{padding-top: 80px !important;}" el_id="about"][vc_column el_class="wide-box-mobile"][vc_empty_space height="40px"][team scroller="no" number_per_row="4" row_height="385" number="4"][/vc_column][/vc_row][vc_row bg_type="bg_color" bg_override="ex-full" css=".vc_custom_1525535546043{padding-top: 120px !important;padding-bottom: 80px !important;}" bg_color_value="#439ade"][vc_column el_class="wide-box-mobile"][ult_animation_block animation="fadeInUp" animation_duration="0.5" animation_delay="1" animation_iteration_count="1"][vc_row_inner][vc_column_inner width="1/4"][stat_counter icon="linearicons-clock2" icon_size="45" icon_color="#ffffff" icon_position="left" counter_title="WORK HOURS" counter_sep="" speed="3" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" counter_color_txt="rgba(255,255,255,0.5)" desc_font="font_family:Poppins|font_call:Poppins|variant:600" desc_font_style="font-weight:600;" font_size_title="12" font_size_counter="58" title_font_size="desktop:11px;" desc_font_size="desktop:30px;" desc_font_color="#ffffff" title_font_line_height="desktop:12px;"][/vc_column_inner][vc_column_inner width="1/4"][stat_counter icon="linearicons-pen-add" icon_size="45" icon_color="#ffffff" icon_position="left" counter_title="FINISHED WORKS" counter_value="340" counter_sep="" speed="3" title_font="font_family:Quicksand|font_call:Quicksand|variant:500" title_font_style="font-weight:500;" counter_color_txt="rgba(255,255,255,0.5)" desc_font="font_family:Poppins|font_call:Poppins|variant:600" desc_font_style="font-weight:600;" font_size_title="12" font_size_counter="58" title_font_size="desktop:11px;" desc_font_size="desktop:30px;" desc_font_color="#ffffff" title_font_line_height="desktop:12px;"][/vc_column_inner][vc_column_inner width="1/4"][stat_counter icon="linearicons-share2" icon_size="45" icon_color="#ffffff" icon_position="left" counter_title="TWITTER FOLLOWERS" counter_value="5430" counter_sep="" speed="3" title_font="font_family:Quicksand|font_call:Quicksand|variant:500" title_font_style="font-weight:500;" counter_color_txt="rgba(255,255,255,0.5)" desc_font="font_family:Poppins|font_call:Poppins|variant:600" desc_font_style="font-weight:600;" font_size_title="12" font_size_counter="58" title_font_size="desktop:11px;" desc_font_size="desktop:30px;" desc_font_color="#ffffff" title_font_line_height="desktop:12px;"][/vc_column_inner][vc_column_inner width="1/4"][stat_counter icon="linearicons-database-lock" icon_size="45" icon_color="#ffffff" icon_position="left" counter_title="DATA STORED" counter_value="18250" counter_sep="" speed="3" title_font="font_family:Quicksand|font_call:Quicksand|variant:500" title_font_style="font-weight:500;" counter_color_txt="rgba(255,255,255,0.5)" desc_font="font_family:Poppins|font_call:Poppins|variant:600" desc_font_style="font-weight:600;" font_size_title="12" font_size_counter="58" title_font_size="desktop:11px;" desc_font_size="desktop:30px;" desc_font_color="#ffffff" title_font_line_height="desktop:12px;"][/vc_column_inner][/vc_row_inner][/ult_animation_block][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);


$data = array();
$data['name'] = __( 'Section with Overlay Video', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-48.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="image" parallax_style="vcpb-vz-jquery" bg_image_new="id^9818|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/slide-business44.jpg|caption^null|alt^null|title^slide-business44|description^null" bg_override="ex-full" enable_overlay="enable_overlay_value" overlay_color="rgba(67,154,222,0.92)" seperator_enable="seperator_enable_value" seperator_type="xlarge_triangle_seperator" seperator_position="bottom_seperator" seperator_svg_height="250" seperator_shape_background="#ffffff"][vc_column][vc_empty_space height="140px"][vc_custom_heading text="We have the solution" font_container="tag:h4|text_align:center|color:rgba(255%2C255%2C255%2C0.65)" use_theme_fonts="yes" el_class="no-letter-spacing"][vc_custom_heading text="Face your challenge<br />
become a winner!" font_container="tag:h2|font_size:45px|text_align:center|color:%23ffffff|line_height:1.25em" use_theme_fonts="yes" el_class="no-letter-spacing"][vc_empty_space height="10px"][vc_btn title="Who we are" style="outline-custom" outline_custom_color="#ffffff" outline_custom_hover_background="#ffffff" outline_custom_hover_text="#43b8de" shape="round" align="center" link="url:%23|||" el_class="nav-to"][vc_empty_space height="450px"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3" css=".vc_custom_1525534935898{margin-top: -380px !important;}" el_class="more-z-index"][ultimate_modal icon_type="selector" icon="linearicons-play-circle" modal_contain="ult-youtube" modal_on="image" btn_img="id^10939|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/revslider/home4/slide-business15.jpg|caption^null|alt^null|title^slide-business15.jpg|description^null" modal_size="medium" modal_style="overlay-fade" overlay_bg_color="#000000" overlay_bg_opacity="90" content_bg_color="#ffffff" img_size="80"]<iframe src="https://www.youtube.com/embed/ghKU-dfkDmw?rel=0" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe>[/ultimate_modal][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Simple Section with Text', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['about'];
$data['custom_class'] = 'about';
$data['image_path'] = $skudo_get_directory .'images/skudo-47.jpg'; 
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" bg_type="image" parallax_style="vcpb-default" bg_image_new="id^9766|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/bgwave2.png|caption^null|alt^null|title^bgwave2|description^null" bg_image_repeat="no-repeat" bg_override="ex-full" css=".vc_custom_1548352068560{padding-top: 100px !important;}"][vc_column][vc_custom_heading text="Lets Work Together!" font_container="tag:h3|text_align:center|line_height:1.3em" use_theme_fonts="yes"][vc_custom_heading text="Skudo is a piece of art, you want it, you will love it!" font_container="tag:p|font_size:20px|text_align:center" use_theme_fonts="yes"][vc_btn title="CONTACT US TODAY!" style="outline-custom" outline_custom_color="__USE_THEME_MAIN_COLOR__" outline_custom_hover_background="__USE_THEME_MAIN_COLOR__" outline_custom_hover_text="#ffffff" shape="round" size="sm" align="center" css_animation="bottom-to-top"][vc_empty_space height="80px"][vc_separator][vc_empty_space height="1px"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Background Image Only', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-46.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="image" parallax_style="vcpb-vz-jquery" bg_image_new="id^9708|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/slide-business41.jpg|caption^null|alt^null|title^slide-business41|description^null" bg_image_repeat="no-repeat" bg_override="ex-full" css=".vc_custom_1548352117257{padding-top: 300px !important;padding-bottom: 300px !important;}"][vc_column][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Text + Testimonials with Scroller', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'testimonials';
$data['image_path'] = $skudo_get_directory .'images/skudo-45.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="bg_color" bg_override="ex-full" bg_color_value="#fcfcfc" css=".vc_custom_1525523634943{padding-top: 130px !important;padding-bottom: 160px !important;}"][vc_column width="1/3"][vc_custom_heading text="Our clients say" font_container="tag:h3|text_align:left" use_theme_fonts="yes"][vc_empty_space height="5px"][vc_custom_heading text="Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit" font_container="tag:p|text_align:left" use_theme_fonts="yes"][vc_empty_space height="5px"][ult_buttons btn_title="Contact us today!" btn_size="ubtn-small" btn_title_color="#ffffff" btn_bg_color="#cf536f" btn_hover="ubtn-left-bg" btn_bg_color_hover="__USE_THEME_MAIN_COLOR__" btn_title_color_hover="#ffffff" icon_size="32" btn_icon_pos="ubtn-sep-icon-at-left" btn_border_style="solid" btn_color_border_hover="__USE_THEME_MAIN_COLOR__" btn_border_size="1" btn_radius="5" btn_font_family="font_family:Poppins|font_call:Poppins|variant:600" btn_font_style="font-weight:600;" btn_font_size="desktop:14px;"][/vc_column][vc_column width="2/3" el_class="nav-control-align-left"][ult_animation_block animation="slideInUp" animation_duration="1" animation_delay="0.3" animation_iteration_count="1"][testimonials style_testimonials="style2" des_testimonials_flex_slideshow="no" des_testimonials_flex_items_desktop="2" des_testimonials_flex_items_small_desktop="2" des_testimonials_flex_items_tablet="1" des_testimonials_flex_items_mobile="1" des_testimonials_flex_direction_nav="no" testimonials_cats="dark-text"][/ult_animation_block][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Progress Bar + Background', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-44.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="image" parallax_style="vcpb-vz-jquery" bg_image_new="id^10956|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/revslider/home1/slide-business.jpg|caption^null|alt^null|title^slide-business.jpg|description^null" bg_override="ex-full" css=".vc_custom_1548352178933{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column width="1/2"][vc_column_text]</p>
<h4><span style="color: #43b8de;">CODE</span> SKILLS</h4>
<p>[/vc_column_text][vc_empty_space height="60px"][vc_progress_bar values="%5B%7B%22label%22%3A%22Development%22%2C%22value%22%3A%2295%22%7D%2C%7B%22label%22%3A%22Design%22%2C%22value%22%3A%2285%22%7D%2C%7B%22label%22%3A%22Print%22%2C%22value%22%3A%2280%22%7D%2C%7B%22label%22%3A%22Marketing%22%2C%22value%22%3A%2270%22%7D%5D" bgcolor="custom" custombgcolor="__USE_THEME_MAIN_COLOR__" customtxtcolor="#101010" units="%"][vc_empty_space height="60px"][vc_column_text]</p>
<h4><span style="color: #cf536f;">DESIGN</span> SKILLS</h4>
<p>[/vc_column_text][vc_empty_space height="60px"][vc_progress_bar values="%5B%7B%22label%22%3A%22Development%22%2C%22value%22%3A%2295%22%7D%2C%7B%22label%22%3A%22Design%22%2C%22value%22%3A%2285%22%7D%2C%7B%22label%22%3A%22Print%22%2C%22value%22%3A%2280%22%7D%2C%7B%22label%22%3A%22Marketing%22%2C%22value%22%3A%2270%22%7D%5D" bgcolor="custom" custombgcolor="#cf536f" customtxtcolor="#101010" units="%"][/vc_column][vc_column width="1/2"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Title with Features', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['about'];
$data['custom_class'] = 'about';
$data['image_path'] = $skudo_get_directory .'images/skudo-43.jpg'; 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1528393876378{margin-top: 100px !important;margin-bottom: 50px !important;}"][vc_column width="1/2"][ult_animation_block animation="slideInUp" animation_duration="1" animation_delay="0.3" animation_iteration_count="1"][vc_custom_heading text="We are consultants and<br />
we develop Digital Strategies" font_container="tag:h3|text_align:left" use_theme_fonts="yes"][vc_empty_space height="10px"][vc_custom_heading text="Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis commodo consequat." font_container="tag:p|text_align:left" use_theme_fonts="yes"][/ult_animation_block][/vc_column][vc_column width="1/2"][/vc_column][/vc_row][vc_row css=".vc_custom_1528393964112{margin-top: 50px !important;margin-bottom: 100px !important;}"][vc_column width="1/3"][ult_animation_block animation="fadeInUp" animation_duration="1" animation_delay="0.3" animation_iteration_count="1" opacity_start_effect="80"][vc_custom_heading text="01." font_container="tag:h2|font_size:70PX|text_align:left|color:__USE_THEME_MAIN_COLOR__" use_theme_fonts="yes"][vc_column_text]</p>
<h3>Innovative</h3>
<p>Interactively brand robust collaboration and idea-sharing rather than dynamic e-tailers[/vc_column_text][/ult_animation_block][/vc_column][vc_column width="1/3"][ult_animation_block animation="fadeInUp" animation_duration="1" animation_delay="0.6" animation_iteration_count="1" opacity_start_effect="80"][vc_custom_heading text="02." font_container="tag:h2|font_size:70PX|text_align:left|color:__USE_THEME_MAIN_COLOR__" use_theme_fonts="yes"][vc_column_text]</p>
<h3>Intuitive</h3>
<p>Interactively brand robust collaboration and idea-sharing rather than dynamic e-tailers[/vc_column_text][/ult_animation_block][/vc_column][vc_column width="1/3"][ult_animation_block animation="fadeInUp" animation_duration="1" animation_delay="0.9" animation_iteration_count="1" opacity_start_effect="80"][vc_custom_heading text="03." font_container="tag:h2|font_size:70PX|text_align:left|color:__USE_THEME_MAIN_COLOR__" use_theme_fonts="yes"][vc_column_text]</p>
<h3>Modern</h3>
<p>Interactively brand robust collaboration and idea-sharing rather than dynamic e-tailers[/vc_column_text][/ult_animation_block][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Title with Text Blocks 2 Col', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-42.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="bg_color" bg_override="ex-full" css=".vc_custom_1525368130518{padding-top: 100px !important;padding-bottom: 100px !important;}" bg_color_value="#ffffff"][vc_column width="1/3"][vc_column_text]</p>
<h2 class="extra-large-font"><span style="font-weight: 100;">WE</span><br />
BUILD<br />
<span style="font-weight: 100;">STRONG</span><br />
<span style="color: #21a7d3;">BRANDS</span></h2>
<p>[/vc_column_text][ultimate_spacer height="0" height_on_mob_landscape="40" height_on_mob="40"][/vc_column][vc_column width="1/3"][vc_custom_heading text="About our Agency" font_container="tag:h3|text_align:left" use_theme_fonts="yes"][vc_empty_space height="25px"][vc_column_text]Uniquely create competitive e-markets for backward-compatible technologies. Authoritatively morph efficient networks via bleeding-edge results. Completely drive 24/365 e-markets via quality e-business. Progressively plagiarize enterprise strategic theme areas with ubiquitous sources. Enthusiastically drive team driven processes rather than e-tailers.[/vc_column_text][ultimate_spacer height="0" height_on_mob_landscape="40" height_on_mob="40"][/vc_column][vc_column width="1/3"][vc_custom_heading text="Our Misison" font_container="tag:h3|text_align:left" use_theme_fonts="yes"][vc_empty_space height="25px"][vc_column_text]Conveniently maximize standardized web-readiness without integrated products. Competently productivate fully researched results via empowered e-commerce. Quickly repurpose cross-unit methodologies for leading-edge materials. Monotonectally enhance team driven human capital whereas worldwide.[/vc_column_text][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Fancy Text with Services (4 col)', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['services'];
$data['custom_class'] = 'services';
$data['image_path'] = $skudo_get_directory .'images/skudo-41.jpg'; 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1498079322229{padding-top: 120px !important;}"][vc_column][vc_custom_heading text="SO WHY SKUDO?" font_container="tag:h6|text_align:center" use_theme_fonts="yes"][ultimate_fancytext fancytext_prefix="BECAUSE SKUDO IS " strings_textspeed="35" strings_backspeed="0" sufpref_color="#303030" fancytext_strings="INNOVATIVE<br />
RESPONSIVE<br />
BEAUTIFUL<br />
POWERFULL<br />
DIFFERENT<br />
MODERN<br />
UNIQUE" strings_font_family="font_family:Poppins|font_call:Poppins|variant:600" strings_font_style="font-weight:600;" strings_font_size="desktop:30px;mobile_landscape:18px;mobile:14px;" prefsuf_font_family="font_family:Poppins|font_call:Poppins|variant:600" prefsuf_font_style="font-weight:600;" prefix_suffix_font_size="desktop:30px;mobile_landscape:18px;mobile:14px;" fancytext_color="__USE_THEME_MAIN_COLOR__" ex_class="small-letter-spacing"][vc_empty_space height="10px"][vc_custom_heading text="THIS IS OUR WORK PROCESS. IT'S SIMPLE!" font_container="tag:h6|text_align:center" use_theme_fonts="yes"][vc_empty_space height="75px"][vc_row_inner][vc_column_inner width="1/4"][bsf-info-box icon="linearicons-desktop" icon_size="45" icon_color="__USE_THEME_MAIN_COLOR__" title="1. DESIGN" pos="tooltip" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:14px;" title_font_color="#212121" desc_font_color="#eaeaea" desc_font_size="desktop:13px;"]Distinctively incentivize efficient vortals through empowered methods of empowerment. Interactively transition.[/bsf-info-box][vc_empty_space height="40px"][/vc_column_inner][vc_column_inner width="1/4"][bsf-info-box icon="Defaults-code" icon_size="45" icon_color="__USE_THEME_MAIN_COLOR__" title="2. DEVELOPMENT" pos="tooltip" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:14px;" title_font_color="#212121" desc_font_color="#eaeaea" desc_font_size="desktop:13px;"]Distinctively incentivize efficient vortals through empowered methods of empowerment. Interactively transition.[/bsf-info-box][vc_empty_space height="40px"][/vc_column_inner][vc_column_inner width="1/4"][bsf-info-box icon="linearicons-rocket" icon_size="45" icon_color="__USE_THEME_MAIN_COLOR__" title="3. LAUNCH" pos="tooltip" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:14px;" title_font_color="#212121" desc_font_color="#eaeaea" desc_font_size="desktop:13px;"]Distinctively incentivize efficient vortals through empowered methods of empowerment. Interactively transition.[/bsf-info-box][vc_empty_space height="40px"][/vc_column_inner][vc_column_inner width="1/4"][bsf-info-box icon="linearicons-chart-growth" icon_size="45" icon_color="__USE_THEME_MAIN_COLOR__" title="4. GROW" pos="tooltip" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:14px;" title_font_color="#212121" desc_font_color="#eaeaea" desc_font_size="desktop:13px;"]Distinctively incentivize efficient vortals through empowered methods of empowerment. Interactively transition.[/bsf-info-box][vc_empty_space height="40px"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row bg_type="bg_color" bg_override="ex-full" bg_color_value="#e3e3e4" css=".vc_custom_1498083260476{margin-left: -60px !important;padding-top: 40px !important;padding-bottom: 20px !important;}" el_class="align-center-mobile"][vc_column width="2/3"][vc_custom_heading text="Is time to change your website look!" font_container="tag:h3|text_align:right|color:%234d4d4f" use_theme_fonts="yes" el_class="h3-custom-css"][/vc_column][vc_column width="1/3"][vc_empty_space height="8px"][vc_btn title="GET SKUDO NOW" style="outline-custom" outline_custom_color="#727272" outline_custom_hover_background="__USE_THEME_MAIN_COLOR__" outline_custom_hover_text="#ffffff" shape="round" size="xs" align="left" link="url:%23||target:%20_blank|"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Contact Form + 4 col of About', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['contactforms'];
$data['custom_class'] = 'contactforms';
$data['image_path'] = $skudo_get_directory .'images/skudo-40.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="image" parallax_style="vcpb-vz-jquery" bg_image_new="id^9413|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/04/slide-business19.jpg|caption^null|alt^null|title^slide-business19|description^null" bg_image_repeat="no-repeat" bg_override="ex-full"][vc_column][vc_empty_space height="100px"][vc_row_inner][vc_column_inner width="1/2"][vc_empty_space height="20px"][contact-form-7 id="8893"][/vc_column_inner][vc_column_inner width="1/2"][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces" equal_height="yes" content_placement="top" seperator_enable="seperator_enable_value" seperator_type="xlarge_triangle_seperator" seperator_position="bottom_seperator" seperator_shape_background="#ffffff" el_class="adjust-boxes-on-mobile"][vc_column width="1/4" css=".vc_custom_1478715942019{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}"][ult_content_box trans_property="background" box_shadow="horizontal:px|vertical:px|blur:px|spread:px|color:#f7f7f7|style:none|" margin="margin:0px;" min_height="300" hover_box_shadow="horizontal:px|vertical:px|blur:px|spread:px|color:#f7f7f7|style:none|" responsive_margin="margin:0px;" border="border-style:none;|border-width:1px;border-radius:3px;|border-color:#ededed;" bg_color="__USE_THEME_MAIN_COLOR__" padding="padding:25px;"][vc_column_text]</p>
<h2><span style="color: #f5f5f5;">Our</span></h2>
<h2>Work</h2>
<h2><span style="color: #f5f5f5;">Process</span></h2>
<p>[/vc_column_text][vc_empty_space height="20px"][vc_column_text]</p>
<p style="text-align: left;"><span style="color: #f5f5f5;">Sed ut perspiciatis unde omnis natus error sit voluptatem</span></p>
<p>[/vc_column_text][/ult_content_box][/vc_column][vc_column width="1/4" css=".vc_custom_1478715949770{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}"][ult_content_box bg_color="#303540" box_shadow="horizontal:px|vertical:px|blur:px|spread:px|color:#f7f7f7|style:none|" padding="padding:25px;" margin="margin:0px;" min_height="300" hover_box_shadow="horizontal:px|vertical:px|blur:px|spread:px|color:#f7f7f7|style:none|" responsive_margin="margin:0px;" hover_bg_color="#373c48" border="border-style:solid;|border-right-width:1px;|border-color:#373c48;" link="url:%23|||"][vc_icon type="openiconic" icon_openiconic="vc-oi vc-oi-calendar" color="custom" size="lg" custom_color="__USE_THEME_MAIN_COLOR__"][vc_custom_heading text="Make the plan" font_container="tag:h3|text_align:left|color:%23ffffff" use_theme_fonts="yes"][vc_empty_space height="10px"][vc_column_text]</p>
<p style="text-align: left;"><span style="color: #f5f5f5;">Sed ut perspiciatis unde omnis iste natus error sit dolore</span></p>
<p>[/vc_column_text][vc_empty_space height="10px"][ult_createlink title="MORE INFO" btn_link="url:%23|||" link_hover_style="Style_1" text_color="#6b7079" text_hovercolor="__USE_THEME_MAIN_COLOR__" text_style="left" font_family="font_family:Poppins|font_call:Poppins|variant:700" heading_style="font-weight:700;" title_font_size="desktop:11px;"][/ult_content_box][/vc_column][vc_column width="1/4" css=".vc_custom_1478716020118{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}"][ult_content_box bg_color="#303540" box_shadow="horizontal:px|vertical:px|blur:px|spread:px|color:#f7f7f7|style:none|" padding="padding:25px;" margin="margin:0px;" min_height="300" hover_box_shadow="horizontal:px|vertical:px|blur:px|spread:px|color:#f7f7f7|style:none|" responsive_margin="margin:0px;" hover_bg_color="#373c48" border="border-style:solid;|border-right-width:1px;|border-color:#373c48;" link="url:%23|||"][vc_icon type="typicons" icon_typicons="typcn typcn-device-desktop" color="custom" size="lg" custom_color="__USE_THEME_MAIN_COLOR__"][vc_custom_heading text="Design &amp; develop" font_container="tag:h3|text_align:left|color:%23ffffff" use_theme_fonts="yes"][vc_empty_space height="10px"][vc_column_text]</p>
<p style="text-align: left;"><span style="color: #f5f5f5;">Sed ut perspiciatis unde omnis iste natus error sit dolore</span></p>
<p>[/vc_column_text][vc_empty_space height="10px"][ult_createlink title="MORE INFO" btn_link="url:%23|||" link_hover_style="Style_1" text_color="#6b7079" text_hovercolor="__USE_THEME_MAIN_COLOR__" text_style="left" font_family="font_family:Poppins|font_call:Poppins|variant:700" heading_style="font-weight:700;" title_font_size="desktop:12px;"][/ult_content_box][/vc_column][vc_column width="1/4" css=".vc_custom_1478716026893{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}"][ult_content_box bg_color="#303540" box_shadow="horizontal:px|vertical:px|blur:px|spread:px|color:#f7f7f7|style:none|" padding="padding:25px;" margin="margin:0px;" min_height="300" hover_box_shadow="horizontal:px|vertical:px|blur:px|spread:px|color:#f7f7f7|style:none|" responsive_margin="margin:0px;" hover_bg_color="#373c48" link="url:%23|||"][vc_icon type="entypo" icon_entypo="entypo-icon entypo-icon-rocket" color="custom" size="lg" custom_color="__USE_THEME_MAIN_COLOR__"][vc_custom_heading text="Deploy &amp; grow" font_container="tag:h3|text_align:left|color:%23ffffff" use_theme_fonts="yes"][vc_empty_space height="10px"][vc_column_text]</p>
<p style="text-align: left;"><span style="color: #f5f5f5;">Sed ut perspiciatis unde omnis iste natus error sit dolore</span></p>
<p>[/vc_column_text][vc_empty_space height="10px"][ult_createlink title="MORE INFO" btn_link="url:%23|||" link_hover_style="Style_1" text_color="#6b7079" text_hovercolor="__USE_THEME_MAIN_COLOR__" text_style="left" font_family="font_family:Poppins|font_call:Poppins|variant:700" heading_style="font-weight:700;" title_font_size="desktop:12px;"][/ult_content_box][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Text Block + Progress Bar', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-39.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="bg_color" bg_override="ex-full" css=".vc_custom_1525277729458{padding-top: 100px !important;padding-bottom: 100px !important;}" bg_color_value="#ffffff"][vc_column width="1/2"][vc_custom_heading text="ABOUT OUR COMPANY" font_container="tag:h5|text_align:left" use_theme_fonts="yes"][vc_empty_space height="25px"][vc_column_text]Uniquely create competitive e-markets for backward-compatible technologies. Authoritatively morph efficient networks via bleeding-edge results. Completely drive 24/365 e-markets via quality e-business. Progressively plagiarize enterprise strategic theme areas with ubiquitous sources. Enthusiastically drive team driven processes rather than e-tailers.[/vc_column_text][/vc_column][vc_column width="1/2"][vc_custom_heading text="OUR SKILLS" font_container="tag:h5|text_align:left" use_theme_fonts="yes"][vc_empty_space height="35px"][vc_progress_bar values="%5B%7B%22label%22%3A%22Development%22%2C%22value%22%3A%2295%22%7D%2C%7B%22label%22%3A%22Design%22%2C%22value%22%3A%2285%22%7D%2C%7B%22label%22%3A%22Marketing%22%2C%22value%22%3A%2270%22%7D%2C%7B%22label%22%3A%22Consulting%22%2C%22value%22%3A%2265%22%7D%5D" bgcolor="custom" custombgcolor="#212121" units="%"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Wide Style Portfolio', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'portfolio';
$data['image_path'] = $skudo_get_directory .'images/skudo-38.jpg'; 
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" bg_type="bg_color" bg_override="ex-full" bg_color_value="#f7f7f7"][vc_column][vc_separator color="custom" accent_color="#e0e5e9"][vc_empty_space height="100px"][vc_custom_heading text="OUR LATEST WORKS" font_container="tag:h3|text_align:center" use_theme_fonts="yes"][vc_empty_space height="20px"][vc_row_inner][vc_column_inner width="1/3"][/vc_column_inner][vc_column_inner width="1/3"][vc_custom_heading text="Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit conseq magni" font_container="tag:p|font_size:18px|text_align:center" use_theme_fonts="yes"][/vc_column_inner][vc_column_inner width="1/3"][/vc_column_inner][/vc_row_inner][vc_empty_space height="50px"][cubeportfolio id="30"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Title with Button + Background', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-36.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="image" parallax_style="vcpb-default" bg_image_new="id^9523|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/slide-business28.jpg|caption^null|alt^null|title^slide-business28|description^null" bg_override="ex-full" enable_overlay="enable_overlay_value" overlay_color="rgba(0,0,0,0.4)" css=".vc_custom_1548352342605{padding-top: 100px !important;padding-bottom: 70px !important;}" el_class="mobile-no-padding"][vc_column][ultimate_heading main_heading="Super Skudo" main_heading_color="#d6d6d6" sub_heading_color="#ffffff" spacer_orientation="vertical" main_heading_font_family="font_family:Roboto Slab|font_call:Roboto+Slab|variant:300" main_heading_style="font-weight:300;" main_heading_font_size="desktop:22px;mobile:16px;" sub_heading_font_family="font_family:Roboto|font_call:Roboto|variant:700" sub_heading_style="font-weight:700;" sub_heading_font_size="desktop:45px;mobile_landscape:55px;mobile:45px;"]A true Multi-Concept Theme[/ultimate_heading][vc_empty_space height="20px"][vc_btn title="GET SKUDO NOW" style="outline-custom" outline_custom_color="#dddddd" outline_custom_hover_background="__USE_THEME_MAIN_COLOR__" outline_custom_hover_text="#ffffff" shape="round" align="center" link="|||"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Testimonials with Scroller + Partners', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'testimonials';
$data['image_path'] = $skudo_get_directory .'images/skudo-35.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="bg_color" bg_override="ex-full" css=".vc_custom_1476094284481{padding-top: 80px !important;padding-bottom: 80px !important;}" bg_color_value="#f4f4f4"][vc_column][ult_animation_block animation="fadeInUp" animation_duration="1" animation_delay="0" animation_iteration_count="1"][ultimate_heading sub_heading_color="#383838" spacer_orientation="vertical" main_heading_font_family="font_family:Roboto Slab|font_call:Roboto+Slab|variant:300" main_heading_style="font-weight:300;" main_heading_font_size="desktop:22px;mobile:16px;" sub_heading_font_family="font_family:Roboto|font_call:Roboto|variant:700" sub_heading_style="font-weight:700;" sub_heading_font_size="desktop:35px;mobile_landscape:55px;mobile:45px;"]Our Clients Say[/ultimate_heading][vc_empty_space height="60px"][/ult_animation_block][ult_animation_block animation="fadeInUp" animation_duration="1" animation_delay="0.3" animation_iteration_count="1"][testimonials style_testimonials="style2" des_testimonials_flex_slideshow_speed="4500" des_testimonials_flex_animation_duration="1800" des_testimonials_flex_items_desktop="3" des_testimonials_flex_items_small_desktop="2" des_testimonials_flex_items_tablet="2" des_testimonials_flex_items_mobile="1" des_testimonials_flex_control_nav="no" des_testimonials_flex_height="600" style="style2" testimonials_cats="dark-text"][vc_empty_space height="10px"][vc_row_inner][vc_column_inner][partners skudo_partners_orderby="title" scroller="no" des_partners_owl_autoplay="no" des_partners_owl_items_desktop="4" des_partners_owl_navigation="no" number_per_row="6" partners_cats="dark-logos" number="6" inner_border_color="#efefef"][/vc_column_inner][/vc_row_inner][/ult_animation_block][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Latest Projects', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'portfolio';
$data['image_path'] = $skudo_get_directory .'images/skudo-34.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="bg_color" bg_override="ex-full" bg_color_value="#ffffff" css=".vc_custom_1525183451151{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column][ultimate_heading main_heading="we do cool stuff" spacer_orientation="vertical" main_heading_font_family="font_family:Roboto Slab|font_call:Roboto+Slab|variant:300" main_heading_style="font-weight:300;" main_heading_font_size="desktop:20px;mobile:16px;" sub_heading_font_family="font_family:Roboto|font_call:Roboto|variant:700" sub_heading_style="font-weight:700;" sub_heading_font_size="desktop:45px;mobile_landscape:55px;mobile:45px;"]Latest Work[/ultimate_heading][vc_empty_space height="40px"][cubeportfolio id="61"][vc_empty_space height="80px"][vc_btn title="VIEW FULL PORTFOLIO" style="outline-custom" outline_custom_color="#bfbfbf" outline_custom_hover_background="__USE_THEME_MAIN_COLOR__" outline_custom_hover_text="#ffffff" align="center"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Skudo Services + Title', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-33.jpg'; 
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content" bg_type="bg_color" bg_override="ex-full" css=".vc_custom_1525189095811{padding-top: 80px !important;padding-bottom: 30px !important;}" bg_color_value="#f7f7f7"][vc_column][ultimate_heading main_heading="Major Services" sub_heading_color="#36383a" spacer_orientation="vertical" main_heading_font_family="font_family:Roboto Slab|font_call:Roboto+Slab|variant:300" main_heading_style="font-weight:300;" main_heading_font_size="desktop:22px;mobile:16px;" sub_heading_font_family="font_family:Roboto|font_call:Roboto|variant:700" sub_heading_style="font-weight:700;" sub_heading_font_size="desktop:55px;mobile_landscape:55px;mobile:45px;" margin_design_tab_text=""]What we do[/ultimate_heading][ultimate_spacer height="40" height_on_mob_landscape="20" height_on_mob="20"][vc_row_inner][vc_column_inner width="1/3"][ult_animation_block animation="fadeInUp" animation_duration="1" animation_delay="0" animation_iteration_count="1" opacity_start_effect="80"][ultimate_info_banner banner_title="Web Development" banner_desc="We build strong web projects" button_text="READ MORE" banner_image="id^9329|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/04/web-dev.jpg|caption^null|alt^null|title^web-dev|description^null" banner_size="300" overlay_color="rgba(24,63,119,0.75)" button_color="#ffffff" button_text_color="#ffffff" button_text_hover_color="__USE_THEME_MAIN_COLOR__" title_color="#ffffff" desc_color="__USE_THEME_MAIN_COLOR__" desc_line_height="desktop:12px;" title_font_family="font_family:Raleway|font_call:Raleway|variant:800" title_font_style="font-weight:800;" title_font_size="desktop:28px;" desc_font_family="font_family:Raleway|font_call:Raleway|variant:600" desc_font_style="font-weight:600;" desc_font_size="desktop:16px;" button_font_family="font_family:Open Sans|font_call:Open+Sans|variant:700" button_font_style="font-weight:700;" button_font_size="desktop:12px;"][/ult_animation_block][/vc_column_inner][vc_column_inner width="1/3"][ult_animation_block animation="fadeInUp" animation_duration="1" animation_delay="0.3" animation_iteration_count="1" opacity_start_effect="80"][ultimate_spacer height="0" height_on_mob_landscape="40" height_on_mob="40"][ultimate_info_banner banner_title="App Development" banner_desc="For IOS & Android" button_text="READ MORE" banner_image="id^9327|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/04/app-dev.jpg|caption^null|alt^null|title^app-dev|description^null" banner_size="300" overlay_color="rgba(24,63,119,0.75)" button_color="#ffffff" button_text_color="#ffffff" button_text_hover_color="__USE_THEME_MAIN_COLOR__" title_color="#ffffff" desc_color="__USE_THEME_MAIN_COLOR__" desc_line_height="desktop:12px;" title_font_family="font_family:Raleway|font_call:Raleway|variant:800" title_font_style="font-weight:800;" title_font_size="desktop:28px;" desc_font_family="font_family:Raleway|font_call:Raleway|variant:600" desc_font_style="font-weight:600;" desc_font_size="desktop:16px;" button_font_family="font_family:Open Sans|font_call:Open+Sans|variant:700" button_font_style="font-weight:700;" button_font_size="desktop:12px;"][/ult_animation_block][/vc_column_inner][vc_column_inner width="1/3"][ult_animation_block animation="fadeInUp" animation_duration="1" animation_delay="0.6" animation_iteration_count="1" opacity_start_effect="80"][ultimate_spacer height="0" height_on_mob_landscape="40" height_on_mob="40"][ultimate_info_banner banner_title="Print Design" banner_desc="Any size any palette" button_text="READ MORE" banner_image="id^9328|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/04/print-design.jpg|caption^null|alt^null|title^print-design|description^null" banner_size="300" ib3_alignment="ultb3-img-center" overlay_color="rgba(24,63,119,0.75)" button_color="#ffffff" button_text_color="#ffffff" button_text_hover_color="__USE_THEME_MAIN_COLOR__" title_color="#ffffff" desc_color="__USE_THEME_MAIN_COLOR__" desc_line_height="desktop:12px;" title_font_family="font_family:Raleway|font_call:Raleway|variant:800" title_font_style="font-weight:800;" title_font_size="desktop:28px;" desc_font_family="font_family:Raleway|font_call:Raleway|variant:600" desc_font_style="font-weight:600;" desc_font_size="desktop:16px;" button_font_family="font_family:Open Sans|font_call:Open+Sans|variant:700" button_font_style="font-weight:700;" button_font_size="desktop:12px;"][/ult_animation_block][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Upper Tabs', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['verticalstabsicon'];
$data['custom_class'] = 'verticalstabsicon';
$data['image_path'] = $skudo_get_directory .'images/skudo-32.jpg'; 
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1525183389535{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column][verticaltabs style_vt="icontext" orientation="horizontal" style="icontext"][verticaltab icon="fa-gift" title="E-Commerce" tab_id="1474056939962-2-7"][vc_row_inner][vc_column_inner width="1/2" css=".vc_custom_1474056192226{padding-left: 25px !important;}"][vc_custom_heading text="E-Commerce Shops" use_theme_fonts="yes"][vc_empty_space height="20px"][vc_column_text]Completely incentivize cost effective interfaces through prospective testing procedures. Distinctively reinvent cooperative potentialities for interoperable "outside the box" thinking. Assertively develop.[/vc_column_text][vc_empty_space height="40px"][bsf-info-box icon="linearicons-shield-check" icon_size="23" icon_color="__USE_THEME_MAIN_COLOR__" title="Nam liber tempor cum soluta nobis" el_class="use-as-lists" title_font="font_family:Arimo|font_call:Arimo" title_font_size="desktop:15px;"][/bsf-info-box][vc_empty_space height="10px"][bsf-info-box icon="linearicons-database-history" icon_size="23" icon_color="__USE_THEME_MAIN_COLOR__" title="Nam liber tempor cum soluta nobis eleifend option" el_class="use-as-lists" title_font="font_family:Arimo|font_call:Arimo" title_font_size="desktop:15px;"][/bsf-info-box][vc_empty_space height="10px"][bsf-info-box icon="linearicons-check" icon_size="23" icon_color="__USE_THEME_MAIN_COLOR__" title="Nam liber tempor cum soluta nobis eleifend option" el_class="use-as-lists" title_font="font_family:Arimo|font_call:Arimo" title_font_size="desktop:15px;"][/bsf-info-box][/vc_column_inner][vc_column_inner width="1/2"][ult_animation_block animation="fadeInRight" animation_duration="1" animation_delay="0.3" animation_iteration_count="1" opacity_start_effect="80"][ultimate_carousel slides_on_desk="1" slides_on_tabs="1" slides_on_mob="1" speed="800" arrows="off" dots_color="__USE_THEME_MAIN_COLOR__"][vc_single_image image="9479" img_size="full"][vc_single_image image="9513" img_size="full"][/ultimate_carousel][/ult_animation_block][/vc_column_inner][/vc_row_inner][/verticaltab][verticaltab icon="fa-keyboard-o" title="Development" tab_id="1474047827453-0-8"][vc_row_inner][vc_column_inner width="1/2" css=".vc_custom_1474056192226{padding-left: 25px !important;}"][vc_custom_heading text="Web Development" use_theme_fonts="yes"][vc_empty_space height="20px"][vc_column_text]Completely incentivize cost effective interfaces through prospective testing procedures. Distinctively reinvent cooperative potentialities for interoperable "outside the box" thinking. Assertively develop.[/vc_column_text][vc_empty_space height="25px"][/vc_column_inner][vc_column_inner width="1/2"][vc_media_grid element_width="6" grid_id="vc_gid:1528902393160-0dfcaf54-0c24-3" include="9289,9282,9284,9278"][/vc_column_inner][/vc_row_inner][/verticaltab][verticaltab icon="fa-bomb" title="Marketing" tab_id="1474056937778-1-7"][vc_row_inner][vc_column_inner width="1/2" css=".vc_custom_1474056192226{padding-left: 25px !important;}"][vc_custom_heading text="Marketing" font_container="tag:h3|text_align:left" use_theme_fonts="yes"][vc_empty_space height="20px"][vc_column_text]Completely incentivize cost effective interfaces through prospective testing procedures. Distinctively reinvent cooperative potentialities for interoperable "outside the box" thinking. Assertively develop.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_custom_heading text="Marketing Digital" font_container="tag:h3|text_align:left" use_theme_fonts="yes"][vc_empty_space height="20px"][vc_column_text]Completely incentivize cost effective interfaces through prospective testing procedures. Distinctively reinvent cooperative potentialities for interoperable "outside the box" thinking. Assertively develop.[/vc_column_text][/vc_column_inner][/vc_row_inner][/verticaltab][verticaltab icon="fa-play-circle" title="VIDEO" tab_id="1474056942114-3-4"][vc_row_inner][vc_column_inner width="1/2" css=".vc_custom_1474056192226{padding-left: 25px !important;}"][vc_custom_heading text="Video / Motion" font_container="tag:h2|text_align:left|color:__USE_THEME_MAIN_COLOR__" use_theme_fonts="yes"][vc_empty_space height="20px"][vc_column_text]Completely incentivize cost effective interfaces through prospective testing procedures. Distinctively reinvent cooperative potentialities for interoperable "outside the box" thinking. Assertively develop.[/vc_column_text][vc_empty_space height="25px"][/vc_column_inner][vc_column_inner width="1/2"][ult_animation_block animation="fadeInRight" animation_duration="1" animation_delay="0.3" animation_iteration_count="1" opacity_start_effect="80"][vc_video][/ult_animation_block][/vc_column_inner][/vc_row_inner][/verticaltab][/verticaltabs][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Image + Text Elements', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['about'];
$data['custom_class'] = 'about';
$data['image_path'] = $skudo_get_directory .'images/skudo-31.jpg'; 
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" equal_height="yes" bg_type="bg_color" bg_override="ex-full" bg_color_value="#f7f7f7"][vc_column width="1/2"][ult_animation_block animation="fadeInLeft" animation_duration="1" animation_delay="0.6" animation_iteration_count="1" opacity_start_effect="80"][vc_single_image image="9507" img_size="full"][/ult_animation_block][/vc_column][vc_column width="1/2" el_class="home-padding3"][ult_animation_block animation="fadeInRight" animation_duration="1" animation_delay="0.6" animation_iteration_count="1"][ultimate_spacer height="80" height_on_mob_landscape="20" height_on_mob="20"][vc_row_inner][vc_column_inner el_class="home-boxes6" width="1/2"][vc_custom_heading text="01" font_container="tag:h2|font_size:70PX|text_align:left|color:__USE_THEME_MAIN_COLOR__" use_theme_fonts="yes"][vc_column_text]</p>
<h3>INNOVATIVE</h3>
<p>Interactively brand robust collaboration and idea-sharing rather than dynamic e-tailers. Enthusiastically envisioneer inexpensive.[/vc_column_text][/vc_column_inner][vc_column_inner el_class="home-boxes6" width="1/2"][vc_custom_heading text="02" font_container="tag:h2|font_size:70PX|text_align:left|color:__USE_THEME_MAIN_COLOR__" use_theme_fonts="yes"][vc_column_text]</p>
<h3>INTUITIVE</h3>
<p>Interactively brand robust collaboration and idea-sharing rather than dynamic e-tailers. Enthusiastically envisioneer inexpensive.[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner el_class="home-boxes6" width="1/2"][vc_custom_heading text="03" font_container="tag:h2|font_size:70PX|text_align:left|color:__USE_THEME_MAIN_COLOR__" use_theme_fonts="yes"][vc_column_text]</p>
<h3>MODERN</h3>
<p>Interactively brand robust collaboration and idea-sharing rather than dynamic e-tailers. Enthusiastically envisioneer inexpensive.[/vc_column_text][/vc_column_inner][vc_column_inner el_class="home-boxes6" width="1/2"][vc_custom_heading text="04" font_container="tag:h2|font_size:70PX|text_align:left|color:__USE_THEME_MAIN_COLOR__" use_theme_fonts="yes"][vc_column_text]</p>
<h3>AVANGUARD</h3>
<p>Interactively brand robust collaboration and idea-sharing rather than dynamic e-tailers. Enthusiastically envisioneer inexpensive.[/vc_column_text][/vc_column_inner][/vc_row_inner][/ult_animation_block][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( '3 Columns (Rounded icon)', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['services'];
$data['custom_class'] = 'services';
$data['image_path'] = $skudo_get_directory .'images/skudo-30.jpg'; 
$data['content'] = <<<CONTENT
[vc_row][vc_column width="1/3"][ultimate_spacer height="80" height_on_mob_landscape="40" height_on_mob="40"][ult_animation_block animation="fadeInDown" animation_duration="0.5" animation_delay="0" animation_iteration_count="1" opacity_start_effect="100"][bsf-info-box icon="linearicons-pencil-ruler2" icon_size="30" icon_color="__USE_THEME_MAIN_COLOR__" icon_style="advanced" icon_border_style="solid" icon_color_border="__USE_THEME_MAIN_COLOR__" icon_border_size="2" icon_border_radius="5" icon_border_spacing="60" title="PREMIUM DESIGN" read_more="more" read_text="READ MORE" pos="left" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:15px;"]Credibly communicate competitive initiatives before competitive client[/bsf-info-box][/ult_animation_block][ultimate_spacer height="60" height_on_mob_landscape="0" height_on_mob="0"][/vc_column][vc_column width="1/3"][ultimate_spacer height="80" height_on_mob_landscape="40" height_on_mob="40"][ult_animation_block animation="fadeInDown" animation_duration="0.5" animation_delay="0.25" animation_iteration_count="1" opacity_start_effect="100"][bsf-info-box icon="Defaults-angellist" icon_size="30" icon_color="__USE_THEME_MAIN_COLOR__" icon_style="advanced" icon_border_style="solid" icon_color_border="__USE_THEME_MAIN_COLOR__" icon_border_size="2" icon_border_radius="5" icon_border_spacing="60" title="AWESOME RESOURCES" read_more="more" read_text="READ MORE" pos="left" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:15px;"]Credibly communicate competitive initiatives before competitive[/bsf-info-box][/ult_animation_block][ultimate_spacer height="60" height_on_mob_landscape="40" height_on_mob="40"][/vc_column][vc_column width="1/3"][ultimate_spacer height="80" height_on_mob_landscape="0" height_on_mob="0"][ult_animation_block animation="fadeInDown" animation_duration="0.5" animation_delay="0.5" animation_iteration_count="1" opacity_start_effect="100"][bsf-info-box icon="linearicons-hdd-down" icon_size="30" icon_color="__USE_THEME_MAIN_COLOR__" icon_style="advanced" icon_border_style="solid" icon_color_border="__USE_THEME_MAIN_COLOR__" icon_border_size="2" icon_border_radius="5" icon_border_spacing="60" title="ONE CLICK DEMO" read_more="more" read_text="READ MORE" pos="left" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:15px;"]Competitive initiatives before competitive client relationships.[/bsf-info-box][/ult_animation_block][ultimate_spacer height="60" height_on_mob_landscape="20" height_on_mob="20"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][ultimate_spacer height="80" height_on_mob_landscape="40" height_on_mob="40"][ult_animation_block animation="fadeInDown" animation_duration="0.5" animation_delay="0" animation_iteration_count="1" opacity_start_effect="100"][bsf-info-box icon="linearicons-pencil-ruler2" icon_size="30" icon_color="__USE_THEME_MAIN_COLOR__" icon_style="advanced" icon_border_style="solid" icon_color_border="__USE_THEME_MAIN_COLOR__" icon_border_size="2" icon_border_radius="5" icon_border_spacing="60" title="PREMIUM DESIGN" read_more="more" read_text="READ MORE" pos="left" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:15px;"]Credibly communicate competitive initiatives before competitive client[/bsf-info-box][/ult_animation_block][ultimate_spacer height="60" height_on_mob_landscape="0" height_on_mob="0"][/vc_column][vc_column width="1/3"][ultimate_spacer height="80" height_on_mob_landscape="40" height_on_mob="40"][ult_animation_block animation="fadeInDown" animation_duration="0.5" animation_delay="0.25" animation_iteration_count="1" opacity_start_effect="100"][bsf-info-box icon="Defaults-angellist" icon_size="30" icon_color="__USE_THEME_MAIN_COLOR__" icon_style="advanced" icon_border_style="solid" icon_color_border="__USE_THEME_MAIN_COLOR__" icon_border_size="2" icon_border_radius="5" icon_border_spacing="60" title="AWESOME RESOURCES" read_more="more" read_text="READ MORE" pos="left" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:15px;"]Credibly communicate competitive initiatives before competitive[/bsf-info-box][/ult_animation_block][ultimate_spacer height="60" height_on_mob_landscape="40" height_on_mob="40"][/vc_column][vc_column width="1/3"][ultimate_spacer height="80" height_on_mob_landscape="0" height_on_mob="0"][ult_animation_block animation="fadeInDown" animation_duration="0.5" animation_delay="0.5" animation_iteration_count="1" opacity_start_effect="100"][bsf-info-box icon="linearicons-hdd-down" icon_size="30" icon_color="__USE_THEME_MAIN_COLOR__" icon_style="advanced" icon_border_style="solid" icon_color_border="__USE_THEME_MAIN_COLOR__" icon_border_size="2" icon_border_radius="5" icon_border_spacing="60" title="ONE CLICK DEMO" read_more="more" read_text="READ MORE" pos="left" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:15px;"]Competitive initiatives before competitive client relationships.[/bsf-info-box][/ult_animation_block][ultimate_spacer height="60" height_on_mob_landscape="20" height_on_mob="20"][/vc_column][/vc_row]	
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Services 3 Col (with Background)', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['services'];
$data['custom_class'] = 'services';
$data['image_path'] = $skudo_get_directory .'images/skudo-29.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="image" parallax_style="vcpb-default" bg_image_new="id^9332|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/04/love-minimal.jpg|caption^null|alt^null|title^love-minimal|description^null" bg_override="ex-full" css=".vc_custom_1548352686819{padding-top: 120px !important;padding-bottom: 80px !important;}"][vc_column][vc_custom_heading text="Like our Product?" font_container="tag:h3|text_align:center" use_theme_fonts="yes"][vc_empty_space height="45px"][vc_row_inner][vc_column_inner width="1/3"][bsf-info-box icon="linearicons-desktop" icon_size="65" icon_color="__USE_THEME_MAIN_COLOR__" title="Design" pos="tooltip" title_font="font_family:Handlee|font_call:Handlee" title_font_style="font-weight:bold;" title_font_size="desktop:25px;" desc_font_color="#eaeaea" desc_font_size="desktop:15px;"]Distinctively incentivize efficient vortals through empowered methods of empowerment. Interactively transition.[/bsf-info-box][/vc_column_inner][vc_column_inner width="1/3"][bsf-info-box icon="Defaults-code" icon_size="65" icon_color="__USE_THEME_MAIN_COLOR__" title="Development" pos="tooltip" title_font="font_family:Handlee|font_call:Handlee" title_font_style="font-weight:600;" title_font_size="desktop:25px;" desc_font_color="#eaeaea" desc_font_size="desktop:15px;"]Distinctively incentivize efficient vortals through empowered methods of empowerment. Interactively transition.[/bsf-info-box][/vc_column_inner][vc_column_inner width="1/3"][bsf-info-box icon="linearicons-rocket" icon_size="65" icon_color="__USE_THEME_MAIN_COLOR__" title="Launch" pos="tooltip" title_font="font_family:Handlee|font_call:Handlee" title_font_style="font-weight:bold;" title_font_size="desktop:25px;" desc_font_color="#eaeaea" desc_font_size="desktop:15px;"]Distinctively incentivize efficient vortals through empowered methods of empowerment. Interactively transition.[/bsf-info-box][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/3"][/vc_column_inner][vc_column_inner width="1/3"][vc_btn title="Subscribe today!" style="gradient" shape="round" size="lg" align="center" css_animation="zoomIn" button_block="true"][/vc_column_inner][vc_column_inner width="1/3"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Info Circle + Background', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['services'];
$data['custom_class'] = 'services';
$data['image_path'] = $skudo_get_directory .'images/skudo-27.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="image" parallax_style="vcpb-vz-jquery" bg_image_new="id^9049|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/04/tabs-1.jpg|caption^null|alt^null|title^tabs-1|description^null" bg_override="ex-full" css=".vc_custom_1548352773086{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column width="1/2"][vc_empty_space height="20px"][info_circle edge_radius="150" start_degree="90" eg_padding="70" icon_size="35" img_icon_size="22" content_icon_size="50" content_bg="#0d4695" content_color="#ffffff" eg_br_style="solid" eg_br_width="1" eg_border_color="__USE_THEME_MAIN_COLOR__" highlight_style="info-circle-pulse" icon_launch="easeOutBounce" icon_launch_duration="1" icon_launch_delay="0.2" responsive_breakpoint="800" desc_font="font_family:Hind|font_call:Hind" desc_font_size="desktop:16px;" desc_line_height="desktop:19px;" title_font="font_family:Dosis|font_call:Dosis|variant:700" title_font_style="font-weight:700;" title_font_size="desktop:22px;" title_line_height="desktop:22px;"][info_circle_item info_title="WEB DESIGN" info_icon="linearicons-laptop-phone" icon_bg_color="__USE_THEME_MAIN_COLOR__" icon_color="#ffffff"]Competently transform proactive internal or "organic".[/info_circle_item][info_circle_item info_title="MOBILE" info_icon="linearicons-tablet" icon_bg_color="__USE_THEME_MAIN_COLOR__" icon_color="#ffffff"]Competently transform proactive internal or "organic".[/info_circle_item][info_circle_item info_title="BRANDING" info_icon="linearicons-grapes" icon_bg_color="__USE_THEME_MAIN_COLOR__" icon_color="#ffffff"]Competently transform proactive internal or "organic".[/info_circle_item][info_circle_item info_title="VIDEO" info_icon="linearicons-clapboard-play" icon_bg_color="__USE_THEME_MAIN_COLOR__" icon_color="#ffffff"]Competently transform proactive internal or "organic".[/info_circle_item][info_circle_item info_title="GAMING" info_icon="linearicons-joystick" icon_bg_color="__USE_THEME_MAIN_COLOR__" icon_color="#ffffff"]Competently transform proactive internal or "organic".[/info_circle_item][/info_circle][/vc_column][vc_column width="1/2"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Advanced Tabs + Progress Bar', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['verticalstabsicon'];
$data['custom_class'] = 'verticalstabsicon';
$data['image_path'] = $skudo_get_directory .'images/skudo-26.jpg'; 
$data['content'] = <<<CONTENT
<p>[vc_row bg_type="bg_color" bg_override="ex-full" css=".vc_custom_1525127105196{padding-top: 100px !important;padding-bottom: 100px !important;}" bg_color_value="#ffffff"][vc_column width="1/2"][ult_tab_element tab_style="Style_2" tab_hover_title_color="#ffffff" tab_hover_background_color="__USE_THEME_MAIN_COLOR__" acttab_title="#ffffff" acttab_background="__USE_THEME_MAIN_COLOR__" tabs_border_radius="4" main_heading_font_family="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:16px;"][single_tab title="About the Project" tab_id="1525124647260-10"][vc_column_text]Uniquely create competitive e-markets for backward-compatible technologies. Authoritatively morph efficient networks via bleeding-edge results. Completely drive 24/365 e-markets via quality e-business. Progressively plagiarize enterprise strategic theme areas with ubiquitous sources. Enthusiastically drive team driven processes rather than e-tailers.[/vc_column_text][/single_tab][single_tab title="What next?" tab_id="1525124647324-8"][vc_column_text]Synergistically incentivize goal-oriented process improvements vis-a-vis inexpensive best practices. Completely innovate B2B web-readiness rather than robust.[/vc_column_text][/single_tab][/ult_tab_element][/vc_column][vc_column width="1/2"][vc_custom_heading text="Used Tools" font_container="tag:h3|text_align:left" use_theme_fonts="yes"][vc_empty_space height="35px"][vc_progress_bar values="%5B%7B%22label%22%3A%22Development%22%2C%22value%22%3A%2295%22%7D%2C%7B%22label%22%3A%22Design%22%2C%22value%22%3A%2285%22%7D%2C%7B%22label%22%3A%22Marketing%22%2C%22value%22%3A%2270%22%7D%2C%7B%22label%22%3A%22Consulting%22%2C%22value%22%3A%2265%22%7D%5D" bgcolor="custom" custombgcolor="__USE_THEME_MAIN_COLOR__" units="%" customtxtcolor="__USE_THEME_MAIN_COLOR__"][/vc_column][/vc_row]</p>
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Fixed wide Portfolio', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'portfolio';
$data['image_path'] = $skudo_get_directory .'images/skudo-25.jpg'; 
$data['content'] = <<<CONTENT
<p>[vc_row full_width="stretch_row_content_no_spaces" bg_type="bg_color" bg_override="ex-full" bg_color_value="#ffffff"][vc_column el_class="wide-box-mobile"][cubeportfolio id="30"][/vc_column][/vc_row]</p>
CONTENT;
vc_add_default_templates($data);


$data = array();
$data['name'] = __( 'Services 3 Col Icon Top', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['services'];
$data['custom_class'] = 'services';
$data['image_path'] = $skudo_get_directory .'images/skudo-24.jpg'; 
$data['content'] = <<<CONTENT
<p>[vc_row css=".vc_custom_1498492965301{padding-top: 100px !important;padding-bottom: 80px !important;}"][vc_column width="1/3" css=".vc_custom_1491682521219{padding-right: 30px !important;padding-left: 30px !important;}"][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][ult_animation_block animation="fadeInDown" animation_duration="0.5" animation_delay="0" animation_iteration_count="1"][bsf-info-box icon="linearicons-scissors" icon_size="27" icon_color="#ffffff" icon_style="circle" icon_color_bg="__USE_THEME_MAIN_COLOR__" title="Visual Page Builder" read_more="more" read_text="READ MORE" hover_effect="upper_border_scale" pos="top" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:16px;"]Professionally repurpose premium rather than magnetic bandwidth extensible[/bsf-info-box][/ult_animation_block][/vc_column][vc_column width="1/3" css=".vc_custom_1491682528530{padding-right: 30px !important;padding-left: 30px !important;}"][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][ult_animation_block animation="fadeInDown" animation_duration="0.5" animation_delay="0.2" animation_iteration_count="1"][bsf-info-box icon="linearicons-laptop-phone" icon_size="27" icon_color="#ffffff" icon_style="circle" icon_color_bg="__USE_THEME_MAIN_COLOR__" title="Responsive Design" read_more="more" read_text="READ MORE" hover_effect="upper_border_scale" pos="top" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:16px;"]Professionally repurpose premium rather than magnetic bandwidth extensible[/bsf-info-box][/ult_animation_block][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][/vc_column][vc_column width="1/3" css=".vc_custom_1491682544185{padding-right: 30px !important;padding-left: 30px !important;}"][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][ult_animation_block animation="fadeInDown" animation_duration="0.5" animation_delay="0.4" animation_iteration_count="1"][bsf-info-box icon="linearicons-gift" icon_size="27" icon_color="#ffffff" icon_style="circle" icon_color_bg="__USE_THEME_MAIN_COLOR__" title="Free Support &amp; Updates" read_more="more" read_text="READ MORE" hover_effect="upper_border_scale" pos="top" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:16px;"]Professionally repurpose premium rather than magnetic bandwidth extensible[/bsf-info-box][/ult_animation_block][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][/vc_column][/vc_row][vc_row css=".vc_custom_1498492965301{padding-top: 100px !important;padding-bottom: 80px !important;}"][vc_column width="1/3" css=".vc_custom_1491682521219{padding-right: 30px !important;padding-left: 30px !important;}"][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][ult_animation_block animation="fadeInDown" animation_duration="0.5" animation_delay="0" animation_iteration_count="1"][bsf-info-box icon="linearicons-scissors" icon_size="27" icon_color="#ffffff" icon_style="circle" icon_color_bg="__USE_THEME_MAIN_COLOR__" title="Visual Page Builder" read_more="more" read_text="READ MORE" hover_effect="upper_border_scale" pos="top" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:16px;"]Professionally repurpose premium rather than magnetic bandwidth extensible[/bsf-info-box][/ult_animation_block][/vc_column][vc_column width="1/3" css=".vc_custom_1491682528530{padding-right: 30px !important;padding-left: 30px !important;}"][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][ult_animation_block animation="fadeInDown" animation_duration="0.5" animation_delay="0.2" animation_iteration_count="1"][bsf-info-box icon="linearicons-laptop-phone" icon_size="27" icon_color="#ffffff" icon_style="circle" icon_color_bg="__USE_THEME_MAIN_COLOR__" title="Responsive Design" read_more="more" read_text="READ MORE" hover_effect="upper_border_scale" pos="top" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:16px;"]Professionally repurpose premium rather than magnetic bandwidth extensible[/bsf-info-box][/ult_animation_block][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][/vc_column][vc_column width="1/3" css=".vc_custom_1491682544185{padding-right: 30px !important;padding-left: 30px !important;}"][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][ult_animation_block animation="fadeInDown" animation_duration="0.5" animation_delay="0.4" animation_iteration_count="1"][bsf-info-box icon="linearicons-gift" icon_size="27" icon_color="#ffffff" icon_style="circle" icon_color_bg="__USE_THEME_MAIN_COLOR__" title="Free Support &amp; Updates" read_more="more" read_text="READ MORE" hover_effect="upper_border_scale" pos="top" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:16px;"]Professionally repurpose premium rather than magnetic bandwidth extensible[/bsf-info-box][/ult_animation_block][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][/vc_column][/vc_row]</p>
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Team Members', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['team'];
$data['custom_class'] = 'team';
$data['image_path'] = $skudo_get_directory .'images/skudo-23.jpg'; 
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content" css=".vc_custom_1548352829001{margin-top: 30px !important;}"][vc_column css=".vc_custom_1525104146141{padding-right: 50px !important;padding-left: 50px !important;}"][ultimate_heading main_heading="We love our job!" sub_heading_color="#36383a" spacer_orientation="vertical" main_heading_font_family="font_family:Roboto Slab|font_call:Roboto+Slab|variant:300" main_heading_style="font-weight:300;" main_heading_font_size="desktop:22px;mobile:16px;" sub_heading_font_family="font_family:Roboto|font_call:Roboto|variant:700" sub_heading_style="font-weight:700;" sub_heading_font_size="desktop:55px;mobile_landscape:55px;mobile:45px;"]Meet the team[/ultimate_heading][vc_empty_space height="60px"][team scroller="no" number_per_row="4" row_height="485" number="4"][/vc_column][/vc_row][vc_row bg_type="image" parallax_style="vcpb-default" bg_image_new="id^9339|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/04/love-minimal-small.jpg|caption^null|alt^null|title^love-minimal-small|description^null" bg_override="ex-full" enable_overlay="enable_overlay_value" overlay_color="rgba(67,184,222,0.92)" overlay_pattern="transperant" css=".vc_custom_1548352882919{padding-top: 60px !important;padding-bottom: 20px !important;}"][vc_column][vc_custom_heading text="LETS WORK TOGETHER!" font_container="tag:h3|text_align:center|color:%23ffffff|line_height:1.3em" use_theme_fonts="yes"][vc_custom_heading text="Skudo is a piece of art, you want it, you will love it!" font_container="tag:p|font_size:20px|text_align:center|color:%23f4f4f4" use_theme_fonts="yes"][vc_btn title="PURCHASE SKUDO NOW" style="outline-custom" outline_custom_color="#ffffff" outline_custom_hover_background="#ffffff" outline_custom_hover_text="#101010" shape="round" size="sm" align="center" css_animation="bottom-to-top"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Medium Wide Style', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'portfolio';
$data['image_path'] = $skudo_get_directory .'images/skudo-22.jpg'; 
$data['content'] = <<<CONTENT
<p>[vc_row full_width="stretch_row_content" css=".vc_custom_1493735188626{padding-top: 100px !important;padding-right: 50px !important;padding-bottom: 100px !important;padding-left: 50px !important;}"][vc_column][ultimate_heading main_heading="we do cool stuff!" sub_heading_color="#36383a" spacer_orientation="vertical" main_heading_font_family="font_family:Roboto Slab|font_call:Roboto+Slab|variant:300" main_heading_style="font-weight:300;" main_heading_font_size="desktop:22px;mobile:16px;" sub_heading_font_family="font_family:Roboto|font_call:Roboto|variant:700" sub_heading_style="font-weight:700;" sub_heading_font_size="desktop:65px;mobile_landscape:55px;mobile:45px;"]Our Work[/ultimate_heading][vc_empty_space height="40px"][cubeportfolio id="54"][/vc_column][/vc_row]</p>
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Skudo Services', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-21.jpg'; 
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content" bg_type="bg_color" bg_override="ex-full" css=".vc_custom_1491755581435{padding-top: 100px !important;padding-right: 50px !important;padding-bottom: 100px !important;padding-left: 50px !important;}" bg_color_value="#f7f7f7"][vc_column][vc_row_inner][vc_column_inner width="1/3"][ultimate_info_banner banner_title="Web Development" banner_desc="We build strong web projects" button_text="READ MORE" banner_image="id^9329|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/04/web-dev.jpg|caption^null|alt^null|title^web-dev|description^null" banner_size="300" overlay_color="rgba(0,0,0,0.55)" button_color="#ffffff" button_text_color="#ffffff" button_text_hover_color="__USE_THEME_MAIN_COLOR__" button_border_width="1" button_border_radius="25" title_color="#ffffff" desc_color="#ededed" desc_line_height="desktop:18px;" title_font_family="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:28px;" desc_font_family="font_family:Quicksand|font_call:Quicksand|variant:500" desc_font_style="font-weight:500;" desc_font_size="desktop:18px;" button_font_family="font_family:Dosis|font_call:Dosis|variant:700" button_font_style="font-weight:700;" button_font_size="desktop:11px;"][/vc_column_inner][vc_column_inner width="1/3"][ultimate_spacer height="0" height_on_mob_landscape="40" height_on_mob="40"][ultimate_info_banner banner_title="App Development" banner_desc="For IOS & Android" button_text="READ MORE" banner_image="id^9327|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/04/app-dev.jpg|caption^null|alt^null|title^app-dev|description^null" banner_size="300" overlay_color="rgba(12,12,12,0.55)" button_color="#ffffff" button_text_color="#ffffff" button_text_hover_color="__USE_THEME_MAIN_COLOR__" button_border_width="1" button_border_radius="25" title_color="#ffffff" desc_color="#ededed" desc_line_height="desktop:18px;" title_font_family="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:28px;" desc_font_family="font_family:Dosis|font_call:Dosis|variant:500" desc_font_style="font-weight:500;" desc_font_size="desktop:18px;" button_font_family="font_family:Quicksand|font_call:Quicksand|variant:700" button_font_style="font-weight:700;" button_font_size="desktop:11px;"][/vc_column_inner][vc_column_inner width="1/3"][ultimate_spacer height="0" height_on_mob_landscape="40" height_on_mob="40"][ultimate_info_banner banner_title="Print Design" banner_desc="Any size any palette" button_text="READ MORE" banner_image="id^9328|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/04/print-design.jpg|caption^null|alt^null|title^print-design|description^null" banner_size="300" overlay_color="rgba(12,12,12,0.55)" button_color="#ffffff" button_text_color="#ffffff" button_text_hover_color="__USE_THEME_MAIN_COLOR__" button_border_width="1" button_border_radius="25" title_color="#ffffff" desc_color="#ededed" desc_line_height="desktop:18px;" title_font_family="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:28px;" desc_font_family="font_family:Dosis|font_call:Dosis|variant:500" desc_font_style="font-weight:500;" desc_font_size="desktop:18px;" button_font_family="font_family:Dosis|font_call:Dosis|variant:700" button_font_style="font-weight:700;" button_font_size="desktop:11px;"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Big Title + Services with Scroller', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['services'];
$data['custom_class'] = 'services';
$data['image_path'] = $skudo_get_directory .'images/skudo-20.jpg'; 
$data['content'] = <<<CONTENT
<p>[vc_row css=".vc_custom_1525102836565{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column][ult_animation_block animation="slideInUp" animation_duration="1" animation_delay="0.2" animation_iteration_count="1"][ultimate_heading main_heading="Design | Development | Video" main_heading_color="#36383a" sub_heading_color="#36383a" spacer="line_only" line_height="65" spacer_orientation="vertical" main_heading_font_family="font_family:Roboto Slab|font_call:Roboto+Slab|variant:300" main_heading_style="font-weight:300;" main_heading_font_size="desktop:22px;mobile:16px;" sub_heading_font_family="font_family:Roboto|font_call:Roboto|variant:700" sub_heading_style="font-weight:700;" sub_heading_font_size="desktop:75px;mobile_landscape:55px;mobile:45px;" line_width="2" spacer_margin="margin-bottom:30px;"]What we do[/ultimate_heading][vc_empty_space height="80px"][ultimate_carousel slides_on_desk="3" slides_on_tabs="2" slides_on_mob="1" speed="600" autoplay="off" arrows="off" dots_color="" dots_icon="ultsl-radio-unchecked" adaptive_height="on" item_space="30"][bsf-info-box icon="linearicons-bucket" icon_size="60" icon_color="__USE_THEME_MAIN_COLOR__" title="PREMIUM DESIGN" read_more="box" link="url:%23|||" pos="top" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:16px;"]Energistically productize reliable infrastructures for collaborative supply chains evolve customer[/bsf-info-box][bsf-info-box icon="linearicons-fire" icon_size="60" icon_color="__USE_THEME_MAIN_COLOR__" title="POWERFUL FRAMEWORK" read_more="box" link="url:%23|||" pos="top" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:16px;"]Energistically productize reliable infrastructures for collaborative supply chains evolve customer[/bsf-info-box][bsf-info-box icon="linearicons-laptop-phone" icon_size="60" icon_color="__USE_THEME_MAIN_COLOR__" title="MOBILE FRIENDLY" read_more="box" link="url:%23|||" pos="top" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:16px;"]Energistically productize reliable infrastructures for collaborative supply chains evolve customer[/bsf-info-box][bsf-info-box icon="linearicons-gift" icon_size="60" icon_color="__USE_THEME_MAIN_COLOR__" title="PREMIUM RESOURCES" read_more="box" link="url:%23|||" pos="top" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:16px;"]Energistically productize reliable infrastructures for collaborative supply chains evolve customer[/bsf-info-box][bsf-info-box icon="linearicons-lifebuoy" icon_size="50" icon_color="__USE_THEME_MAIN_COLOR__" title="FREE SUPPORT &amp; UPDATES" read_more="box" link="url:%23|||" pos="top" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:16px;"]Energistically productize reliable infrastructures for collaborative supply chains evolve customer[/bsf-info-box][/ultimate_carousel][/ult_animation_block][/vc_column][/vc_row]</p>
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Team Grid (4 Columns)', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['team'];
$data['custom_class'] = 'team';
$data['image_path'] = $skudo_get_directory .'images/skudo-19.jpg'; 
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" equal_height="yes" content_placement="top" bg_type="bg_color" seperator_enable="seperator_enable_value" seperator_type="xlarge_triangle_left_seperator" seperator_position="top_bottom_seperator" seperator_svg_height="80" seperator_shape_background="#ffffff" bg_color_value="#ffffff" el_id="team-col4-mobile"][vc_column width="1/4"][ult_team team_member_style="style-2" team_img_bg_color="__USE_THEME_MAIN_COLOR__" team_img_opacity="1" team_img_hover_opacity="0.55" team_member_align_style="left" social_icon_effect="on" social_links="%5B%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-facebook-official%22%2C%22social_icon_color%22%3A%22%23ffffff%22%2C%22social_icon_hover_color%22%3A%22%2320c3c9%22%7D%2C%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-twitter-square%22%2C%22social_icon_color%22%3A%22%23ffffff%22%2C%22social_icon_hover_color%22%3A%22%2320c3c9%22%7D%2C%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-instagram%22%2C%22social_icon_color%22%3A%22%23ffffff%22%2C%22social_icon_hover_color%22%3A%22%2320c3c9%22%7D%5D" divider_effect="" title_text_typography="" team_member_name_font="font_family:Poppins|font_call:Poppins|variant:500" team_member_name_font_style="font-weight:500;" team_member_name_color="#ffffff" team_member_position_font="font_family:Poppins|font_call:Poppins|variant:600" team_member_position_font_style="font-weight:600;" team_member_org_color="rgba(255,255,255,0.5)" team_member_responsive_enable="" image="id^9643|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/team-grid1-1.jpg|caption^null|alt^null|title^team-grid1|description^null" name="Nina Soraia" pos_in_org="CEO Upper" title_box_padding="padding:30px;" team_member_name_font_size="desktop:26px;" team_member_position_font_size="desktop:14px;"][/ult_team][/vc_column][vc_column width="1/4" css=".vc_custom_1528219622965{padding-top: 60px !important;padding-right: 60px !important;padding-bottom: 60px !important;padding-left: 60px !important;background-color: #566a86 !important;}"][vc_column_text]</p>
<h2><span style="color: #ffffff;">Our Team</span></h2>
<p>[/vc_column_text][vc_empty_space height="15px"][vc_column_text]<span style="color: #b9c4d4;">Seamlessly aggregate total linkage info Dramatically visualize ubiquitous leadership.</span>[/vc_column_text][/vc_column][vc_column width="1/4"][ult_team team_member_style="style-2" team_img_bg_color="__USE_THEME_MAIN_COLOR__" team_img_opacity="1" team_img_hover_opacity="0.55" team_member_align_style="left" social_icon_effect="on" social_links="%5B%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-github-alt%22%2C%22social_icon_color%22%3A%22%23ffffff%22%2C%22social_icon_hover_color%22%3A%22rgba(255%2C255%2C255%2C0.5)%22%7D%2C%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-twitter-square%22%2C%22social_icon_color%22%3A%22%23ffffff%22%2C%22social_icon_hover_color%22%3A%22rgba(255%2C255%2C255%2C0.5)%22%7D%2C%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-instagram%22%2C%22social_icon_color%22%3A%22%23ffffff%22%2C%22social_icon_hover_color%22%3A%22rgba(255%2C255%2C255%2C0.5)%22%7D%2C%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-instagram%22%2C%22social_icon_color%22%3A%22%23ffffff%22%2C%22social_icon_hover_color%22%3A%22rgba(255%2C255%2C255%2C0.5)%22%7D%5D" divider_effect="" title_text_typography="" team_member_name_font="font_family:Poppins|font_call:Poppins|variant:500" team_member_name_font_style="font-weight:500;" team_member_name_color="#ffffff" team_member_position_font="font_family:Poppins|font_call:Poppins|variant:600" team_member_position_font_style="font-weight:600;" team_member_org_color="rgba(255,255,255,0.5)" team_member_responsive_enable="" image="id^9644|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/team-grid2-1.jpg|caption^null|alt^null|title^team-grid2|description^null" name="Paulo Moreira" pos_in_org="Web Designer" title_box_padding="padding:30px;" team_member_name_font_size="desktop:26px;" team_member_position_font_size="desktop:14px;"][/ult_team][/vc_column][vc_column width="1/4"][ult_team team_member_style="style-2" team_img_bg_color="__USE_THEME_MAIN_COLOR__" team_img_opacity="1" team_img_hover_opacity="0.55" team_member_align_style="left" social_icon_effect="on" social_links="%5B%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-delicious%22%2C%22social_icon_color%22%3A%22%23ffffff%22%2C%22social_icon_hover_color%22%3A%22rgba(255%2C255%2C255%2C0.5)%22%7D%2C%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-tumblr-square%22%2C%22social_icon_color%22%3A%22%23ffffff%22%2C%22social_icon_hover_color%22%3A%22rgba(255%2C255%2C255%2C0.5)%22%7D%5D" divider_effect="" title_text_typography="" team_member_name_font="font_family:Poppins|font_call:Poppins|variant:500" team_member_name_font_style="font-weight:500;" team_member_name_color="#ffffff" team_member_position_font="font_family:Poppins|font_call:Poppins|variant:600" team_member_position_font_style="font-weight:600;" team_member_org_color="rgba(255,255,255,0.5)" team_member_responsive_enable="" image="id^9645|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/team-grid3-1.jpg|caption^null|alt^null|title^team-grid3|description^null" name="Maria Lurdes" pos_in_org="Graphic Designer" title_box_padding="padding:30px;" team_member_name_font_size="desktop:26px;" team_member_position_font_size="desktop:14px;"][/ult_team][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces" equal_height="yes" content_placement="top" bg_type="bg_color" seperator_enable="seperator_enable_value" seperator_type="xlarge_triangle_left_seperator" seperator_position="top_bottom_seperator" seperator_svg_height="80" seperator_shape_background="#ffffff" bg_color_value="#ffffff" el_id="team-col4-mobile2"][vc_column width="1/4"][ult_team team_member_style="style-2" team_img_bg_color="__USE_THEME_MAIN_COLOR__" team_img_opacity="1" team_img_hover_opacity="0.55" team_member_align_style="left" social_icon_effect="on" social_links="%5B%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-xing-square%22%2C%22social_icon_color%22%3A%22%23ffffff%22%2C%22social_icon_hover_color%22%3A%22%2320c3c9%22%7D%2C%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-twitter-square%22%2C%22social_icon_color%22%3A%22%23ffffff%22%2C%22social_icon_hover_color%22%3A%22%2320c3c9%22%7D%2C%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-behance-square%22%2C%22social_icon_color%22%3A%22%23ffffff%22%2C%22social_icon_hover_color%22%3A%22rgba(255%2C255%2C255%2C0.5)%22%7D%5D" divider_effect="" title_text_typography="" team_member_name_font="font_family:Poppins|font_call:Poppins|variant:500" team_member_name_font_style="font-weight:500;" team_member_name_color="#ffffff" team_member_position_font="font_family:Poppins|font_call:Poppins|variant:600" team_member_position_font_style="font-weight:600;" team_member_org_color="rgba(255,255,255,0.5)" team_member_responsive_enable="" image="id^9646|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/team-grid4-1.jpg|caption^null|alt^null|title^team-grid4|description^null" name="Nina Soraia" pos_in_org="Finances" title_box_padding="padding:30px;" team_member_name_font_size="desktop:26px;" team_member_position_font_size="desktop:14px;"][/ult_team][/vc_column][vc_column width="1/4"][ult_team team_member_style="style-2" team_img_bg_color="__USE_THEME_MAIN_COLOR__" team_img_opacity="1" team_img_hover_opacity="0.55" team_member_align_style="left" social_icon_effect="on" social_links="%5B%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-pinterest-square%22%2C%22social_icon_color%22%3A%22%23ffffff%22%2C%22social_icon_hover_color%22%3A%22rgba(255%2C255%2C255%2C0.5)%22%7D%2C%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-vimeo-square%22%2C%22social_icon_color%22%3A%22%23ffffff%22%2C%22social_icon_hover_color%22%3A%22rgba(255%2C255%2C255%2C0.5)%22%7D%2C%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-pied-piper%22%2C%22social_icon_color%22%3A%22%23ffffff%22%2C%22social_icon_hover_color%22%3A%22rgba(255%2C255%2C255%2C0.5)%22%7D%5D" divider_effect="" title_text_typography="" team_member_name_font="font_family:Poppins|font_call:Poppins|variant:500" team_member_name_font_style="font-weight:500;" team_member_name_color="#ffffff" team_member_position_font="font_family:Poppins|font_call:Poppins|variant:600" team_member_position_font_style="font-weight:600;" team_member_org_color="rgba(255,255,255,0.5)" team_member_responsive_enable="" image="id^9647|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/team-grid5-1.jpg|caption^null|alt^null|title^team-grid5|description^null" name="Joana Doe" pos_in_org="Public Relations" title_box_padding="padding:30px;" team_member_name_font_size="desktop:26px;" team_member_position_font_size="desktop:14px;"][/ult_team][/vc_column][vc_column width="1/4" css=".vc_custom_1528222211104{padding-top: 60px !important;padding-right: 60px !important;padding-bottom: 60px !important;padding-left: 60px !important;background-color: #f5f6f7 !important;}"][vc_column_text]</p>
<h3>Join us!</h3>
<p>[/vc_column_text][vc_empty_space height="15px"][vc_column_text]Seamlessly aggregate worldwide total linkage through[/vc_column_text][vc_empty_space height="10px"][vc_btn title="APPLY NOW" style="gradient" shape="round" size="sm" align="left" css_animation="fadeInUp"][/vc_column][vc_column width="1/4"][ult_team team_member_style="style-2" team_img_bg_color="__USE_THEME_MAIN_COLOR__" team_img_opacity="1" team_img_hover_opacity="0.55" team_member_align_style="left" social_icon_effect="on" social_links="%5B%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-youtube-square%22%2C%22social_icon_color%22%3A%22%23ffffff%22%2C%22social_icon_hover_color%22%3A%22rgba(255%2C255%2C255%2C0.5)%22%7D%2C%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-foursquare%22%2C%22social_icon_color%22%3A%22%23ffffff%22%2C%22social_icon_hover_color%22%3A%22rgba(255%2C255%2C255%2C0.5)%22%7D%2C%7B%22social_icon_url%22%3A%22%23%22%2C%22selected_team_icon%22%3A%22Defaults-maxcdn%22%2C%22social_icon_color%22%3A%22%23ffffff%22%2C%22social_icon_hover_color%22%3A%22rgba(255%2C255%2C255%2C0.5)%22%7D%5D" divider_effect="" title_text_typography="" team_member_name_font="font_family:Poppins|font_call:Poppins|variant:500" team_member_name_font_style="font-weight:500;" team_member_name_color="#ffffff" team_member_position_font="font_family:Poppins|font_call:Poppins|variant:600" team_member_position_font_style="font-weight:600;" team_member_org_color="rgba(255,255,255,0.5)" team_member_responsive_enable="" image="id^9648|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/05/team-grid6-1.jpg|caption^null|alt^null|title^team-grid6|description^null" name="Manuel Politiama" pos_in_org="Help & Support" title_box_padding="padding:30px;" team_member_name_font_size="desktop:26px;" team_member_position_font_size="desktop:14px;"][/ult_team][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Testimonials + Partners', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'testimonials';
$data['image_path'] = $skudo_get_directory .'images/skudo-18.jpg'; 
$data['content'] = <<<CONTENT
<p>[vc_row full_width="stretch_row" content_placement="middle" bg_type="bg_color" bg_override="ex-full" css=".vc_custom_1524843066798{padding-top: 100px !important;padding-bottom: 100px !important;}" bg_color_value="#ffffff"][vc_column width="1/2" el_class="wide-testimonials-mobile"][vc_custom_heading text="Our Clients Say" font_container="tag:h3|text_align:left" use_theme_fonts="yes"][vc_empty_space height="30px"][testimonials des_testimonials_flex_slideshow="no" des_testimonials_flex_direction_nav="no" style="style2" testimonials_cats="dark-text" number="5"][/vc_column][vc_column width="1/2"][vc_empty_space height="60px"][partners scroller="no" number_per_row="2" row_height="100" inner_border_color="#f2f2f2" number="6"][/vc_column][/vc_row]</p>
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Portfolio with s+ Background', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'portfolio';
$data['image_path'] = $skudo_get_directory .'images/skudo-17.jpg';
$data['content'] = <<<CONTENT
[vc_row bg_type="image" parallax_style="vcpb-default" bg_image_new="id^10933|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/revslider/home8/slide-business33.jpg|caption^null|alt^null|title^slide-business33.jpg|description^null" bg_image_repeat="no-repeat" bg_override="ex-full" enable_overlay="enable_overlay_value" overlay_color="rgba(0,0,0,0.05)" overlay_pattern="transperant" css=".vc_custom_1548353385160{padding-top: 100px !important;padding-bottom: 140px !important;}"][vc_column el_class="wide-box-mobile"][vc_custom_heading text="Our Latest Work" font_container="tag:h3|text_align:center" use_theme_fonts="yes" el_class="h3adjust-size-mobile"][vc_custom_heading text="Build amazing portfolios with cubeportfolio and the live preview" font_container="tag:p|font_size:15px|text_align:center" use_theme_fonts="yes"][vc_empty_space height="10px"][ult_createlink title="VIEW ALL PORTFOLIO" link_hover_style="Style_4" text_color="" text_hovercolor="__USE_THEME_MAIN_COLOR__" border_size="1" font_family="font_family:Lato|font_call:Lato|variant:700" heading_style="font-weight:700;" title_font_size="desktop:11px;" css=".vc_custom_1491686117565{margin-left: -10px !important;}"][vc_empty_space height="60px"][cubeportfolio id="64"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Text Block (3 Columns)', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-16.jpg'; 
$data['content'] = <<<CONTENT
<p>[vc_row css=".vc_custom_1524842878089{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column width="1/3" css=".vc_custom_1493669793978{padding-right: 40px !important;padding-left: 40px !important;}"][vc_custom_heading text="Our Values" font_container="tag:h4|text_align:left" use_theme_fonts="yes"][vc_column_text]</p>
<p style="text-align: left;">Authoritatively morph efficient networks via bleeding-edge results. Completely drive raven to e-markets via quality e-business. Progressively plagiarize enterprise strategic theme areas with ubiquitous sources. Enthusiastically drive team driven processes rather than e-tailers.</p>
<p>[/vc_column_text][ultimate_spacer height="0" height_on_mob_landscape="40" height_on_mob="40"][/vc_column][vc_column width="1/3" css=".vc_custom_1493669801304{padding-right: 40px !important;padding-left: 40px !important;}"][vc_custom_heading text="Our Mission" font_container="tag:h4|text_align:left" use_theme_fonts="yes"][vc_column_text]</p>
<p style="text-align: left;">Authoritatively morph efficient networks via bleeding-edge results. Completely drive raven to e-markets via quality e-business. Progressively plagiarize enterprise strategic theme areas with ubiquitous sources. Enthusiastically drive team driven processes rather than e-tailers.</p>
<p>[/vc_column_text][ultimate_spacer height="0" height_on_mob_landscape="40" height_on_mob="40"][/vc_column][vc_column width="1/3"][vc_custom_heading text="Our Philosophy" font_container="tag:h4|text_align:left" use_theme_fonts="yes"][vc_column_text]</p>
<p style="text-align: left;">Authoritatively morph efficient networks via bleeding-edge results. Completely drive raven to e-markets via quality e-business. Progressively plagiarize enterprise strategic theme areas with ubiquitous sources. Enthusiastically drive team driven processes rather than e-tailers.</p>
<p>[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1524842878089{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column width="1/3" css=".vc_custom_1493669793978{padding-right: 40px !important;padding-left: 40px !important;}"][vc_custom_heading text="Our Values" font_container="tag:h4|text_align:left" use_theme_fonts="yes"][vc_column_text]</p>
<p style="text-align: left;">Authoritatively morph efficient networks via bleeding-edge results. Completely drive raven to e-markets via quality e-business. Progressively plagiarize enterprise strategic theme areas with ubiquitous sources. Enthusiastically drive team driven processes rather than e-tailers.</p>
<p>[/vc_column_text][ultimate_spacer height="0" height_on_mob_landscape="40" height_on_mob="40"][/vc_column][vc_column width="1/3" css=".vc_custom_1493669801304{padding-right: 40px !important;padding-left: 40px !important;}"][vc_custom_heading text="Our Mission" font_container="tag:h4|text_align:left" use_theme_fonts="yes"][vc_column_text]</p>
<p style="text-align: left;">Authoritatively morph efficient networks via bleeding-edge results. Completely drive raven to e-markets via quality e-business. Progressively plagiarize enterprise strategic theme areas with ubiquitous sources. Enthusiastically drive team driven processes rather than e-tailers.</p>
<p>[/vc_column_text][ultimate_spacer height="0" height_on_mob_landscape="40" height_on_mob="40"][/vc_column][vc_column width="1/3"][vc_custom_heading text="Our Philosophy" font_container="tag:h4|text_align:left" use_theme_fonts="yes"][vc_column_text]</p>
<p style="text-align: left;">Authoritatively morph efficient networks via bleeding-edge results. Completely drive raven to e-markets via quality e-business. Progressively plagiarize enterprise strategic theme areas with ubiquitous sources. Enthusiastically drive team driven processes rather than e-tailers.</p>
<p>[/vc_column_text][/vc_column][/vc_row]</p>
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Title with Sub-title + Image', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['general'];
$data['custom_class'] = 'general';
$data['image_path'] = $skudo_get_directory .'images/skudo-15.jpg'; 
$data['content'] = <<<CONTENT
<p>[vc_row bg_type="bg_color" bg_override="ex-full" css=".vc_custom_1524842760871{padding-top: 100px !important;}" bg_color_value="#f4f4f4"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_custom_heading text="Design &amp; Engineering" font_container="tag:h2|font_size:40px|text_align:center" google_fonts="font_family:Playfair%20Display%3Aregular%2Citalic%2C700%2C700italic%2C900%2C900italic|font_style:400%20regular%3A400%3Anormal" el_class="no-letter-spacing"][vc_empty_space height="10px"][vc_column_text]</p>
<p style="text-align: center;">Intrinsicly engineer one-to-one partnerships with error-free customer service optimize goal-oriented technology via low-risk high-yield materials</p>
<p>[/vc_column_text][vc_empty_space height="60px"][vc_single_image image="9208" img_size="full" alignment="center"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]</p>
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Services 3 Col Icon Left', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['services'];
$data['custom_class'] = 'services';
$data['image_path'] = $skudo_get_directory .'images/skudo-14.jpg'; 
$data['content'] = <<<CONTENT
<p>[vc_row css=".vc_custom_1525360103705{margin-top: 90px !important;margin-bottom: 60px !important;}"][vc_column width="1/3" el_class="wide-box-mobile"][bsf-info-box icon="linearicons-laptop-phone" icon_size="22" icon_color="#ffffff" icon_style="circle" icon_color_bg="__USE_THEME_MAIN_COLOR__" title="Responsive Design" pos="left" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:18px;" title_font_color="#2e2e2e"]Flexible strategic theme areas through covalent resources redefine team driven human resource[/bsf-info-box][/vc_column][vc_column width="1/3"][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][bsf-info-box icon="linearicons-trophy" icon_size="22" icon_color="#ffffff" icon_style="circle" icon_color_bg="__USE_THEME_MAIN_COLOR__" title="Visual Page Builder" pos="left" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:18px;" title_font_color="#2e2e2e"]Flexible strategic theme areas through covalent resources redefine team driven human resource[/bsf-info-box][/vc_column][vc_column width="1/3"][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][bsf-info-box icon="Defaults-spinner" icon_size="22" icon_color="#ffffff" icon_style="circle" icon_color_bg="__USE_THEME_MAIN_COLOR__" title="Strong Admin Panel" pos="left" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:18px;" title_font_color="#2e2e2e"]Flexible strategic theme areas through covalent resources redefine team driven human resource[/bsf-info-box][/vc_column][/vc_row][vc_row css=".vc_custom_1525360103705{margin-top: 90px !important;margin-bottom: 60px !important;}"][vc_column width="1/3" el_class="wide-box-mobile"][bsf-info-box icon="linearicons-laptop-phone" icon_size="22" icon_color="#ffffff" icon_style="circle" icon_color_bg="__USE_THEME_MAIN_COLOR__" title="Responsive Design" pos="left" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:18px;" title_font_color="#2e2e2e"]Flexible strategic theme areas through covalent resources redefine team driven human resource[/bsf-info-box][/vc_column][vc_column width="1/3"][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][bsf-info-box icon="linearicons-trophy" icon_size="22" icon_color="#ffffff" icon_style="circle" icon_color_bg="__USE_THEME_MAIN_COLOR__" title="Visual Page Builder" pos="left" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:18px;" title_font_color="#2e2e2e"]Flexible strategic theme areas through covalent resources redefine team driven human resource[/bsf-info-box][/vc_column][vc_column width="1/3"][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][bsf-info-box icon="Defaults-spinner" icon_size="22" icon_color="#ffffff" icon_style="circle" icon_color_bg="__USE_THEME_MAIN_COLOR__" title="Strong Admin Panel" pos="left" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:18px;" title_font_color="#2e2e2e"]Flexible strategic theme areas through covalent resources redefine team driven human resource[/bsf-info-box][/vc_column][/vc_row]</p>
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Testimonials with Scroller (3 Col)', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'testimonials';
$data['image_path'] = $skudo_get_directory .'images/skudo-13.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="image" parallax_style="vcpb-default" bg_image_new="id^9009|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2017/12/skudo-corp2-3.jpg|caption^null|alt^null|title^skudo-corp2-3|description^null" bg_image_repeat="no-repeat" bg_override="ex-full" enable_overlay="enable_overlay_value" overlay_color="rgba(249,249,249,0.95)"][vc_column][vc_empty_space height="100px"][ult_animation_block animation="slideInUp" animation_duration="1" animation_delay="0.3" animation_iteration_count="1"][vc_custom_heading text="Our Clients Say" font_container="tag:h3|text_align:center" use_theme_fonts="yes"][vc_empty_space height="60px"][testimonials style_testimonials="style2" des_testimonials_flex_slideshow="no" des_testimonials_flex_items_desktop="3" des_testimonials_flex_items_small_desktop="3" des_testimonials_flex_items_tablet="2" des_testimonials_flex_items_mobile="1" testimonials_cats="dark-text"][/ult_animation_block][vc_empty_space height="100px"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Pricing - Style 1', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['pricing'];
$data['custom_class'] = 'pricing';
$data['image_path'] = $skudo_get_directory .'images/skudo-12.jpg'; 
$data['content'] = <<<CONTENT
<p>[vc_row el_class="padding-layerslider"][vc_column css=".vc_custom_1505817396660{padding-right: 50px !important;padding-left: 50px !important;}"][vc_empty_space height="100px"][ult_animation_block animation="slideInUp" animation_duration="1" animation_delay="0.3" animation_iteration_count="1"][vc_custom_heading text="Different plans. Different needs." font_container="tag:h3|text_align:center" use_theme_fonts="yes"][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/3"][ultimate_pricing design_style="design05" color_scheme="custom" color_bg_main="#ffffff" color_txt_main="#575757" color_bg_highlight="#f2f2f2" color_txt_highlight="#36383a" package_heading="Free" package_sub_heading="Get all the features" package_price="$0" package_btn_text="Just to take a look" package_name_font_color="#36383a" subheading_font_color="rgba(54,56,58,0.5)" price_font_color="#36383a" price_unit_font_color="rgba(54,56,58,0.5)" features_font_color="#575757" button_font_color="#36383a" min_ht="400" package_name_font_family="font_family:Poppins|font_call:Poppins|variant:600" package_name_font_style="font-weight:600;" package_name_font_size="desktop:38px;" subheading_font_family="font_family:Varela Round|font_call:Varela+Round" subheading_font_style="font-style:italic;" subheading_font_size="desktop:13px;" features_font_size="desktop:15px;"]2 GB storage<br />
Free Maintenance<br />
Fully SEO Featured<br />
Unlimited Data Transfer<br />
Dedicated Environment[/ultimate_pricing][/vc_column_inner][vc_column_inner width="1/3"][ultimate_pricing design_style="design05" color_scheme="custom" color_bg_main="#ffffff" color_bg_highlight="__USE_THEME_MAIN_COLOR__" color_txt_highlight="#ffffff" package_heading="Starter" package_sub_heading="the right plan to start" package_price="$19" package_unit="per year" package_btn_text="Get Starter" package_featured="enable" package_name_font_color="#ffffff" subheading_font_color="#b1e4f5" price_font_color="#ffffff" price_unit_font_color="#b1e4f5" features_font_color="#575757" button_font_color="#ffffff" min_ht="400" package_name_font_family="font_family:Poppins|font_call:Poppins|variant:600" package_name_font_style="font-weight:600;" package_name_font_size="desktop:38px;" subheading_font_family="font_family:Varela Round|font_call:Varela+Round" subheading_font_style="font-style:italic;" subheading_font_size="desktop:13px;" price_font_family="font_family:Varela Round|font_call:Varela+Round" price_font_size="desktop:60px;" features_font_size="desktop:15px;"]32 GB storage<br />
Free Maintenance<br />
Fully SEO Featured<br />
Unlimited Data Transfer<br />
Easy Payment[/ultimate_pricing][/vc_column_inner][vc_column_inner width="1/3"][ultimate_pricing design_style="design05" color_scheme="custom" color_bg_main="#ffffff" color_txt_main="#575757" color_bg_highlight="#f3f3f5" color_txt_highlight="#36383a" package_heading="Pro" package_sub_heading="Get all the features" package_price="$49" package_btn_text="For advanced users" package_name_font_color="#36383a" subheading_font_color="rgba(54,56,58,0.5)" price_font_color="#36383a" price_unit_font_color="rgba(54,56,58,0.5)" features_font_color="#575757" button_font_color="#36383a" min_ht="400" package_name_font_family="font_family:Poppins|font_call:Poppins|variant:600" package_name_font_style="font-weight:600;" package_name_font_size="desktop:38px;" subheading_font_family="font_family:Varela Round|font_call:Varela+Round" subheading_font_style="font-style:italic;" subheading_font_size="desktop:13px;" features_font_size="desktop:15px;"]320 GB storage<br />
Free Maintenance<br />
Fully SEO Featured<br />
Unlimited Data Transfer<br />
Dedicated Environment<br />
Easy Payment<br />
24/7 Support[/ultimate_pricing][/vc_column_inner][/vc_row_inner][/ult_animation_block][vc_empty_space height="100px"][/vc_column][/vc_row]</p>
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Newsletter + Background', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['about'];
$data['custom_class'] = 'about';
$data['image_path'] = $skudo_get_directory .'images/skudo-11.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="image" parallax_style="vcpb-default" bg_image_new="id^9148|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/04/slide-business7.jpg|caption^null|alt^null|title^slide-business7|description^null" bg_image_repeat="no-repeat" bg_override="ex-full" css=".vc_custom_1548353497715{padding-top: 380px !important;padding-bottom: 80px !important;}"][vc_column width="1/4"][/vc_column][vc_column width="1/2"][ult_animation_block animation="slideInUp" animation_duration="1" animation_delay="" animation_iteration_count="1"][vc_custom_heading text="Discover more first" font_container="tag:h2|text_align:center" use_theme_fonts="yes"][vc_custom_heading text="Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis commodo consequat." font_container="tag:p|text_align:center" use_theme_fonts="yes"][vc_empty_space height="10px"][newsletter][/ult_animation_block][/vc_column][vc_column width="1/4"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Title + Services', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['services'];
$data['custom_class'] = 'services';
$data['image_path'] = $skudo_get_directory .'images/skudo-10.jpg'; 
$data['content'] = <<<CONTENT
<p>[vc_row css=".vc_custom_1524680363282{margin-top: 100px !important;margin-bottom: 100px !important;}"][vc_column width="1/3" el_class="wide-box-mobile"][ult_animation_block animation="fadeIn" animation_duration="1" animation_delay="0.3" animation_iteration_count="1"][vc_custom_heading text="WHAT WE DO" font_container="tag:h5|text_align:left|color:__USE_THEME_MAIN_COLOR__" use_theme_fonts="yes"][vc_custom_heading text="We love<br />
fresh ideas<br />
and unique<br />
design" font_container="tag:h2|font_size:46px|text_align:left|line_height:1.2em" use_theme_fonts="yes"][vc_empty_space height="40px"][/ult_animation_block][/vc_column][vc_column width="2/3"][vc_row_inner css=".vc_custom_1524690071999{margin-bottom: 30px !important;}"][vc_column_inner width="1/2"][ult_animation_block animation="slideInUp" animation_duration="1" animation_delay="0.3" animation_iteration_count="1"][ult_content_box trans_duration="300" trans_function="linear" bg_color="#ffffff" box_shadow="horizontal:px|vertical:px|blur:px|spread:px|style:none|" padding="padding:25px;" hover_bg_color="#ffffff" hover_border_color="#ffffff" hover_box_shadow="horizontal:0px|vertical:0px|blur:25px|spread:0px|color:#d4dadc|style:outset|"][bsf-info-box icon="linearicons-pictures" icon_size="50" icon_color="__USE_THEME_MAIN_COLOR__" title="Unique Design" read_more="more" read_text="READ MORE" pos="top" el_class="align-icontop-left" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:18px;" title_font_color="#2e2e2e"]Conveniently syndicate flexible strategic theme areas through covalent resources redefine[/bsf-info-box][/ult_content_box][/ult_animation_block][/vc_column_inner][vc_column_inner width="1/2"][ult_animation_block animation="slideInUp" animation_duration="1" animation_delay="0.3" animation_iteration_count="1"][ult_content_box trans_duration="300" trans_function="linear" bg_color="#ffffff" box_shadow="horizontal:px|vertical:px|blur:px|spread:px|style:none|" padding="padding:25px;" hover_bg_color="#ffffff" hover_border_color="#ffffff" hover_box_shadow="horizontal:0px|vertical:0px|blur:25px|spread:0px|color:#d4dadc|style:outset|"][bsf-info-box icon="linearicons-pencil-ruler2" icon_size="50" icon_color="__USE_THEME_MAIN_COLOR__" title="Custom Page Options" read_more="more" read_text="READ MORE" pos="top" el_class="align-icontop-left" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:18px;" title_font_color="#2e2e2e"]Conveniently syndicate flexible strategic theme areas through covalent resources redefine[/bsf-info-box][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][/ult_content_box][/ult_animation_block][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1463177866784{margin-bottom: 30px !important;}"][vc_column_inner width="1/2"][ult_animation_block animation="slideInUp" animation_duration="1" animation_delay="0.3" animation_iteration_count="1"][ult_content_box trans_duration="300" trans_function="linear" box_shadow="horizontal:px|vertical:px|blur:px|spread:px|style:none|" hover_box_shadow="horizontal:0px|vertical:0px|blur:25px|spread:0px|color:#d4dadc|style:outset|" bg_color="#ffffff" padding="padding:25px;" hover_bg_color="#ffffff" hover_border_color="#ffffff"][bsf-info-box icon="linearicons-laptop-phone" icon_size="50" icon_color="__USE_THEME_MAIN_COLOR__" title="Responsive Design" read_more="more" read_text="READ MORE" pos="top" el_class="align-icontop-left" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:18px;" title_font_color="#2e2e2e"]Conveniently syndicate flexible strategic theme areas through covalent resources redefine[/bsf-info-box][/ult_content_box][/ult_animation_block][/vc_column_inner][vc_column_inner width="1/2"][ult_animation_block animation="slideInUp" animation_duration="1" animation_delay="0.3" animation_iteration_count="1"][ult_content_box trans_duration="300" trans_function="linear" bg_color="#ffffff" box_shadow="horizontal:px|vertical:px|blur:px|spread:px|style:none|" hover_box_shadow="horizontal:0px|vertical:0px|blur:25px|spread:0px|color:#d4dadc|style:outset|" padding="padding:25px;" hover_bg_color="#ffffff" hover_border_color="#ffffff"][bsf-info-box icon="linearicons-trophy" icon_size="50" icon_color="__USE_THEME_MAIN_COLOR__" title="Visual Page Builder" read_more="more" read_text="READ MORE" pos="top" el_class="align-icontop-left" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:18px;" title_font_color="#2e2e2e"]Conveniently syndicate flexible strategic theme areas through covalent resources redefine[/bsf-info-box][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][/ult_content_box][/ult_animation_block][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]</p>
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Progression bar + Portfolio', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'portfolio';
$data['image_path'] = $skudo_get_directory .'images/skudo-9.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="image" parallax_style="vcpb-default" bg_image_new="id^9332|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2018/04/love-minimal.jpg|caption^null|alt^null|title^love-minimal|description^null" bg_override="ex-full" enable_overlay="enable_overlay_value" overlay_color="rgba(67,142,222,0.8)" overlay_pattern="transperant" seperator_enable="seperator_enable_value" seperator_type="xlarge_triangle_left_seperator" seperator_position="top_bottom_seperator" seperator_shape_background="#ffffff" css=".vc_custom_1548353539527{padding-top: 140px !important;padding-bottom: 140px !important;}"][vc_column width="1/3"][vc_custom_heading text="Our Latest Work" font_container="tag:h3|text_align:left|color:%23ffffff" use_theme_fonts="yes"][vc_custom_heading text="Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis" font_container="tag:p|text_align:left|color:%23cae2fd" use_theme_fonts="yes"][vc_empty_space height="40px"][vc_progress_bar values="%5B%7B%22label%22%3A%22Development%22%2C%22value%22%3A%2295%22%7D%2C%7B%22label%22%3A%22Design%22%2C%22value%22%3A%2285%22%7D%2C%7B%22label%22%3A%22Marketing%22%2C%22value%22%3A%2270%22%7D%2C%7B%22label%22%3A%22Consulting%22%2C%22value%22%3A%2265%22%7D%5D" bgcolor="custom" custombgcolor="#ffffff" units="%" customtxtcolor="#ffffff"][/vc_column][vc_column width="2/3"][cubeportfolio id="65"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Services 2 Col + Image', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['services'];
$data['custom_class'] = 'services';
$data['image_path'] = $skudo_get_directory .'images/skudo-8.jpg'; 
$data['content'] = <<<CONTENT
<p>[vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1525121162235{margin-top: 120px !important;margin-bottom: 30px !important;}"][vc_column width="1/2" el_class="home-padding3"][ult_animation_block animation="slideInUp" animation_duration="1" animation_delay="0.3" animation_iteration_count="1"][vc_custom_heading text="Innovative WordPress Theme<br />
Super Easy to Work and Setup" font_container="tag:h3|text_align:left" use_theme_fonts="yes"][vc_empty_space height="10px"][vc_custom_heading text="Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis commodo consequat." font_container="tag:p|text_align:left" use_theme_fonts="yes"][vc_empty_space height="40px"][vc_row_inner][vc_column_inner width="1/2" css=".vc_custom_1524679600384{padding-right: 25px !important;}"][bsf-info-box icon="linearicons-bag2" icon_size="35" icon_color="__USE_THEME_MAIN_COLOR__" title="FREE LIFETIME UPDATES" read_more="more" read_text="MORE INFO" hover_effect="upper_border_scale" pos="top" el_class="align-icontop-left" title_font_size="desktop:15px;"]Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium[/bsf-info-box][/vc_column_inner][vc_column_inner width="1/2"][bsf-info-box icon="linearicons-trophy2" icon_size="35" icon_color="__USE_THEME_MAIN_COLOR__" title="VISUAL PAGE BUILDER" read_more="more" read_text="MORE INFO" hover_effect="upper_border_scale" pos="top" el_class="align-icontop-left" title_font_size="desktop:15px;"]Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium[/bsf-info-box][/vc_column_inner][/vc_row_inner][/ult_animation_block][/vc_column][vc_column width="1/2"][ult_animation_block animation="slideInRight" animation_duration="1" animation_delay="0.3" animation_iteration_count="1"][vc_single_image image="9152" img_size="full" alignment="right"][/ult_animation_block][/vc_column][/vc_row]</p>
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Background Image + Services', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['about'];
$data['custom_class'] = 'about';
$data['image_path'] = $skudo_get_directory .'images/skudo-7.jpg'; 
$data['content'] = <<<CONTENT
[vc_row bg_type="image" parallax_style="vcpb-default" bg_image_new="id^8997|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/2017/12/menaco.jpg|caption^null|alt^null|title^menaco|description^null" bg_override="ex-full"][vc_column][vc_empty_space height="100px"][vc_row_inner][vc_column_inner width="1/2"][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text]</p>
<h2><span style="font-weight: 300;">CREATE A</span> OUSTANDING<br /><span style="color: #21a7d3;">WEBSITE</span> <span style="font-weight: 300;">WITH SKUDO</span></h2>
<p>[/vc_column_text][vc_empty_space height="60px"][bsf-info-box icon="linearicons-cart-full" icon_size="32" icon_color="#ffffff" icon_style="circle" icon_color_bg="#40434b" title="Built-In Mega Menus" pos="left" title_font_size="desktop:18px;"]Credibly leverage other's viral supply chains with parallel  e-business. Monotonectally e-enable revolutionary[/bsf-info-box][bsf-info-box icon="linearicons-store" icon_size="32" icon_color="#ffffff" icon_style="circle" icon_color_bg="#40434b" title="Multiple Header Layouts" pos="left" title_font_size="desktop:18px;"]Credibly leverage other's viral supply chains with parallel  e-business. Monotonectally e-enable revolutionary[/bsf-info-box][bsf-info-box icon="linearicons-map" icon_size="32" icon_color="#ffffff" icon_style="circle" icon_color_bg="#40434b" title="Visual Drag &amp; Drop Page Builder" pos="left" title_font_size="desktop:18px;"]Credibly leverage other's viral supply chains with parallel  e-business. Monotonectally e-enable revolutionary[/bsf-info-box][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Testimonials + Contact Form', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['testimonials'];
$data['custom_class'] = 'testimonials';
$data['image_path'] = $skudo_get_directory .'images/skudo-6.jpg'; 
$data['content'] = <<<CONTENT
<p>[vc_row][vc_column][vc_empty_space height="100px"][vc_row_inner][vc_column_inner width="1/2"][vc_custom_heading text="OUR CLIENTS LOVE US" font_container="tag:h3|text_align:left" use_theme_fonts="yes"][vc_empty_space height="20px"][testimonials testimonials_cats="dark-text"][/vc_column_inner][vc_column_inner width="1/2"][contact-form-7 id="8893"][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][/vc_column][/vc_row]</p>
CONTENT;
vc_add_default_templates($data);

$data = array();
$data['name'] = __( 'Image + About with 4 Col', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['about'];
$data['custom_class'] = 'about';
$data['image_path'] = $skudo_get_directory .'images/skudo-5.jpg'; 
$data['content'] = <<<CONTENT
<p>[vc_row][vc_column][vc_empty_space height="80px"][vc_single_image image="8902" img_size="full" alignment="center"][/vc_column][/vc_row][vc_row equal_height="yes" content_placement="top" seperator_enable="seperator_enable_value" seperator_type="xlarge_triangle_seperator" seperator_position="bottom_seperator" seperator_shape_background="#ffffff" el_class="adjust-boxes-on-mobile"][vc_column width="1/4" css=".vc_custom_1478715942019{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}"][ult_content_box trans_property="background" box_shadow="horizontal:px|vertical:px|blur:px|spread:px|color:#f7f7f7|style:none|" margin="margin:0px;" min_height="300" hover_box_shadow="horizontal:px|vertical:px|blur:px|spread:px|color:#f7f7f7|style:none|" responsive_margin="margin:0px;" border="border-style:none;|border-width:1px;border-radius:3px;|border-color:#ededed;" bg_color="__USE_THEME_MAIN_COLOR__" padding="padding:25px;"][vc_column_text]</p>
<h2><span style="color: #f5f5f5;">Our</span></h2>
<h2>Work</h2>
<h2><span style="color: #f5f5f5;">Process</span></h2>
<p>[/vc_column_text][vc_empty_space height="20px"][vc_column_text]</p>
<p style="text-align: left;"><span style="color: #f5f5f5;">Sed ut perspiciatis unde omnis natus error sit voluptatem</span></p>
<p>[/vc_column_text][/ult_content_box][/vc_column][vc_column width="1/4" css=".vc_custom_1478715949770{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}"][ult_content_box bg_color="#303540" box_shadow="horizontal:px|vertical:px|blur:px|spread:px|color:#f7f7f7|style:none|" padding="padding:25px;" margin="margin:0px;" min_height="300" hover_box_shadow="horizontal:px|vertical:px|blur:px|spread:px|color:#f7f7f7|style:none|" responsive_margin="margin:0px;" hover_bg_color="#373c48" border="border-style:solid;|border-right-width:1px;|border-color:#373c48;" link="url:%23|||"][vc_icon type="openiconic" icon_openiconic="vc-oi vc-oi-calendar" color="custom" size="lg" custom_color="__USE_THEME_MAIN_COLOR__"][vc_custom_heading text="Make the plan" font_container="tag:h3|text_align:left|color:%23ffffff" use_theme_fonts="yes"][vc_empty_space height="10px"][vc_column_text]</p>
<p style="text-align: left;"><span style="color: #f5f5f5;">Sed ut perspiciatis unde omnis iste natus error sit dolore</span></p>
<p>[/vc_column_text][vc_empty_space height="10px"][ult_createlink title="MORE INFO" btn_link="url:%23|||" link_hover_style="Style_1" text_color="#6b7079" text_hovercolor="__USE_THEME_MAIN_COLOR__" text_style="left" font_family="font_family:Poppins|font_call:Poppins|variant:700" heading_style="font-weight:700;" title_font_size="desktop:11px;"][/ult_content_box][/vc_column][vc_column width="1/4" css=".vc_custom_1478716020118{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}"][ult_content_box bg_color="#303540" box_shadow="horizontal:px|vertical:px|blur:px|spread:px|color:#f7f7f7|style:none|" padding="padding:25px;" margin="margin:0px;" min_height="300" hover_box_shadow="horizontal:px|vertical:px|blur:px|spread:px|color:#f7f7f7|style:none|" responsive_margin="margin:0px;" hover_bg_color="#373c48" border="border-style:solid;|border-right-width:1px;|border-color:#373c48;" link="url:%23|||"][vc_icon type="typicons" icon_typicons="typcn typcn-device-desktop" color="custom" size="lg" custom_color="__USE_THEME_MAIN_COLOR__"][vc_custom_heading text="Design &amp; develop" font_container="tag:h3|text_align:left|color:%23ffffff" use_theme_fonts="yes"][vc_empty_space height="10px"][vc_column_text]</p>
<p style="text-align: left;"><span style="color: #f5f5f5;">Sed ut perspiciatis unde omnis iste natus error sit dolore</span></p>
<p>[/vc_column_text][vc_empty_space height="10px"][ult_createlink title="MORE INFO" btn_link="url:%23|||" link_hover_style="Style_1" text_color="#6b7079" text_hovercolor="__USE_THEME_MAIN_COLOR__" text_style="left" font_family="font_family:Poppins|font_call:Poppins|variant:700" heading_style="font-weight:700;" title_font_size="desktop:12px;"][/ult_content_box][/vc_column][vc_column width="1/4" css=".vc_custom_1478716026893{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}"][ult_content_box bg_color="#303540" box_shadow="horizontal:px|vertical:px|blur:px|spread:px|color:#f7f7f7|style:none|" padding="padding:25px;" margin="margin:0px;" min_height="300" hover_box_shadow="horizontal:px|vertical:px|blur:px|spread:px|color:#f7f7f7|style:none|" responsive_margin="margin:0px;" hover_bg_color="#373c48" link="url:%23|||"][vc_icon type="entypo" icon_entypo="entypo-icon entypo-icon-rocket" color="custom" size="lg" custom_color="__USE_THEME_MAIN_COLOR__"][vc_custom_heading text="Deploy &amp; grow" font_container="tag:h3|text_align:left|color:%23ffffff" use_theme_fonts="yes"][vc_empty_space height="10px"][vc_column_text]</p>
<p style="text-align: left;"><span style="color: #f5f5f5;">Sed ut perspiciatis unde omnis iste natus error sit dolore</span></p>
<p>[/vc_column_text][vc_empty_space height="10px"][ult_createlink title="MORE INFO" btn_link="url:%23|||" link_hover_style="Style_1" text_color="#6b7079" text_hovercolor="__USE_THEME_MAIN_COLOR__" text_style="left" font_family="font_family:Poppins|font_call:Poppins|variant:700" heading_style="font-weight:700;" title_font_size="desktop:12px;"][/ult_content_box][/vc_column][/vc_row]</p>
CONTENT;
vc_add_default_templates($data);


$data = array();
$data['name'] = __( 'Big Title at Left + Services', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['services'];
$data['custom_class'] = 'services';
$data['image_path'] = $skudo_get_directory .'images/skudo-4.jpg'; 
$data['content'] = <<<CONTENT
<p>[vc_row css=".vc_custom_1500929102403{margin-top: 100px !important;}"][vc_column width="1/3" el_class="wide-box-mobile"][vc_column_text]</p>
<h2 class="extra-large-font"><span style="font-weight: 100;">WE</span><br />
BUILD<br />
<span style="font-weight: 100;">STRONG</span><br />
<span style="color: #21a7d3;">BRANDS</span></h2>
<p>[/vc_column_text][vc_empty_space height="40px"][vc_separator color="custom" align="align_left" el_width="10" accent_color="#333333"][vc_empty_space height="20px"][ult_createlink title="OUR SERVICES" btn_link="url:%23|||" link_hover_style="Style_1" text_color="" text_hovercolor="__USE_THEME_MAIN_COLOR__" text_style="left" font_family="font_family:Roboto|font_call:Roboto|variant:700" heading_style="font-weight:700;" title_font_size="desktop:12px;"][ultimate_spacer height="" height_on_tabs_portrait="60" height_on_mob_landscape="60" height_on_mob="60"][/vc_column][vc_column width="2/3" el_class="wide-box-mobile"][vc_row_inner css=".vc_custom_1463177866784{margin-bottom: 30px !important;}"][vc_column_inner width="1/2"][bsf-info-box icon="linearicons-laptop-phone" icon_size="30" icon_color="__USE_THEME_MAIN_COLOR__" title="Responsive Design" pos="left" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:18px;" title_font_color="#2e2e2e"]Intrinsicly architect intermandated growth strategies with.[/bsf-info-box][/vc_column_inner][vc_column_inner width="1/2"][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][bsf-info-box icon="linearicons-trophy" icon_size="30" icon_color="__USE_THEME_MAIN_COLOR__" title="Visual Page Builder" pos="left" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:18px;" title_font_color="#2e2e2e"]Intrinsicly architect intermandated growth strategies with.[/bsf-info-box][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1463177888816{margin-bottom: 30px !important;}"][vc_column_inner width="1/2"][bsf-info-box icon="linearicons-chart-settings" icon_size="32" icon_color="__USE_THEME_MAIN_COLOR__" title="Strong Admin Panel" pos="left" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:18px;" title_font_color="#2e2e2e"]Intrinsicly architect intermandated growth strategies with.[/bsf-info-box][/vc_column_inner][vc_column_inner width="1/2"][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][bsf-info-box icon="linearicons-pictures" icon_size="30" icon_color="__USE_THEME_MAIN_COLOR__" title="Multiple Menus Types" pos="left" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:18px;" title_font_color="#2e2e2e"]Intrinsicly architect intermandated growth strategies with[/bsf-info-box][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/2"][bsf-info-box icon="linearicons-new-tab" icon_size="30" icon_color="__USE_THEME_MAIN_COLOR__" title="Unique Design" pos="left" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:18px;" title_font_color="#2e2e2e"]Intrinsicly architect intermandated growth strategies with[/bsf-info-box][/vc_column_inner][vc_column_inner width="1/2"][ultimate_spacer height="" height_on_mob_landscape="40" height_on_mob="40"][bsf-info-box icon="linearicons-pencil-ruler2" icon_size="30" icon_color="__USE_THEME_MAIN_COLOR__" title="Custom Page Options" pos="left" title_font="font_family:Poppins|font_call:Poppins|variant:600" title_font_style="font-weight:600;" title_font_size="desktop:18px;" title_font_color="#2e2e2e"]Intrinsicly architect intermandated growth strategies with[/bsf-info-box][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]</p>
CONTENT;
vc_add_default_templates($data);


$data = array();
$data['name'] = __( 'Portfolio with Scroller', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['portfolio'];
$data['custom_class'] = 'portfolio';
$data['image_path'] = $skudo_get_directory .'images/skudo-3.jpg'; 
$data['content'] = <<<CONTENT
<p>[vc_row full_width="stretch_row_content" bg_type="bg_color" bg_override="ex-full" bg_color_value="#f7f7f7"][vc_column][vc_separator color="custom" accent_color="#e0e5e9"][vc_empty_space height="100px"][vc_custom_heading text="OUR LATEST WORKS" font_container="tag:h3|text_align:center" use_theme_fonts="yes"][vc_empty_space height="20px"][vc_row_inner][vc_column_inner width="1/3"][/vc_column_inner][vc_column_inner width="1/3"][vc_custom_heading text="Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit conseq magni" font_container="tag:p|font_size:18px|text_align:center" use_theme_fonts="yes"][/vc_column_inner][vc_column_inner width="1/3"][/vc_column_inner][/vc_row_inner][vc_empty_space height="50px"][cubeportfolio id="59"][vc_empty_space height="20px"][/vc_column][/vc_row]</p>
CONTENT;
vc_add_default_templates($data);


$data = array();
$data['name'] = __( 'Services 3 Col (Border icon)', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['services'];
$data['custom_class'] = 'services';
$data['image_path'] = $skudo_get_directory .'images/skudo-2.jpg'; 
$data['content'] = <<<CONTENT
<p>[vc_row css=".vc_custom_1528216200930{margin-top: 100px !important;margin-bottom: 50px !important;}"][vc_column width="1/3"][bsf-info-box icon="linearicons-trophy2" icon_size="32" icon_color="__USE_THEME_MAIN_COLOR__" icon_style="advanced" icon_border_style="solid" icon_color_border="#e4e5e6" icon_border_size="2" icon_border_radius="500" icon_border_spacing="90" title="VISUAL PAGE BUILDER" read_more="more" read_text="MORE INFO" hover_effect="upper_border_scale" pos="top"]Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium[/bsf-info-box][/vc_column][vc_column width="1/3"][bsf-info-box icon="linearicons-laptop-phone" icon_size="32" icon_color="__USE_THEME_MAIN_COLOR__" icon_style="advanced" icon_border_style="solid" icon_color_border="#e4e5e6" icon_border_size="2" icon_border_radius="500" icon_border_spacing="90" title="RESPONSIVE &amp; RETINA" read_more="more" read_text="MORE INFO" hover_effect="upper_border_scale" pos="top"]Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium[/bsf-info-box][/vc_column][vc_column width="1/3"][bsf-info-box icon="linearicons-shield-check" icon_size="32" icon_color="__USE_THEME_MAIN_COLOR__" icon_style="advanced" icon_border_style="solid" icon_color_border="#e4e5e6" icon_border_size="2" icon_border_radius="500" icon_border_spacing="90" title="FREE LIFETIME UPDATES" read_more="more" read_text="MORE INFO" hover_effect="upper_border_scale" pos="top"]Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium[/bsf-info-box][/vc_column][/vc_row][vc_row css=".vc_custom_1528216200930{margin-top: 100px !important;margin-bottom: 50px !important;}"][vc_column width="1/3"][bsf-info-box icon="linearicons-trophy2" icon_size="32" icon_color="__USE_THEME_MAIN_COLOR__" icon_style="advanced" icon_border_style="solid" icon_color_border="#e4e5e6" icon_border_size="2" icon_border_radius="500" icon_border_spacing="90" title="VISUAL PAGE BUILDER" read_more="more" read_text="MORE INFO" hover_effect="upper_border_scale" pos="top"]Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium[/bsf-info-box][/vc_column][vc_column width="1/3"][bsf-info-box icon="linearicons-laptop-phone" icon_size="32" icon_color="__USE_THEME_MAIN_COLOR__" icon_style="advanced" icon_border_style="solid" icon_color_border="#e4e5e6" icon_border_size="2" icon_border_radius="500" icon_border_spacing="90" title="RESPONSIVE &amp; RETINA" read_more="more" read_text="MORE INFO" hover_effect="upper_border_scale" pos="top"]Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium[/bsf-info-box][/vc_column][vc_column width="1/3"][bsf-info-box icon="linearicons-shield-check" icon_size="32" icon_color="__USE_THEME_MAIN_COLOR__" icon_style="advanced" icon_border_style="solid" icon_color_border="#e4e5e6" icon_border_size="2" icon_border_radius="500" icon_border_spacing="90" title="FREE LIFETIME UPDATES" read_more="more" read_text="MORE INFO" hover_effect="upper_border_scale" pos="top"]Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium[/bsf-info-box][/vc_column][/vc_row]</p>
CONTENT;
vc_add_default_templates($data);



$data = array();
$data['name'] = __( 'Upper Tabs (3 Elements)', 'js_composer' );
$data['cat_display_name'] = $cat_display_names['verticalstabsicon'];
$data['custom_class'] = 'verticalstabsicon';
$data['image_path'] = $skudo_get_directory .'images/skudo-1.jpg'; 
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" bg_type="image" parallax_style="vcpb-vz-jquery" bg_image_new="id^10932|url^http://demos.upperthemes.com/skudo/corporate/wp-content/uploads/sites/2/revslider/home8/slide-business32.jpg|caption^null|alt^null|title^slide-business32.jpg|description^null" bg_image_repeat="no-repeat" bg_override="ex-full"][vc_column][verticaltabs style_vt="text" orientation="horizontal" style="text"][verticaltab title="Who we are" tab_id="1478707136176-0-2c94b-e331"][vc_row_inner equal_height="yes"][vc_column_inner el_class="home-padding1" width="1/2"][vc_empty_space height="20px"][vc_custom_heading text="High Grade<br />
Wordpress Theme" font_container="tag:h2|text_align:left|line_height:1.1em" use_theme_fonts="yes"][vc_empty_space height="10px"][vc_custom_heading text="Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis commodo consequat." font_container="tag:p|text_align:left" use_theme_fonts="yes"][vc_empty_space height="20px"][bsf-info-box icon="linearicons-shield-check" icon_size="28" icon_color="#be678a" title="Nam liber tempor cum soluta nobis" el_class="use-as-lists" title_font="font_family:Poppins|font_call:Poppins"][/bsf-info-box][vc_empty_space height="10px"][bsf-info-box icon="linearicons-database-history" icon_size="28" icon_color="#be678a" title="Nam liber tempor cum eleifend option" el_class="use-as-lists" title_font="font_family:Poppins|font_call:Poppins"][/bsf-info-box][vc_empty_space height="10px"][bsf-info-box icon="linearicons-check" icon_size="28" icon_color="#be678a" title="Distinctively parallel task oriented customer" el_class="use-as-lists" title_font="font_family:Poppins|font_call:Poppins"][/bsf-info-box][vc_empty_space height="20px"][vc_btn title="GET IN TOUCH" style="custom" custom_background="#bd688a" custom_text="#ffffff" shape="round" size="sm" align="left"][/vc_column_inner][vc_column_inner width="1/2"][/vc_column_inner][/vc_row_inner][/verticaltab][verticaltab title="Our Services" tab_id="1500650472217-1-0c94b-e331"][vc_row_inner equal_height="yes"][vc_column_inner el_class="home-padding1" width="1/2"][vc_empty_space height="40px"][bsf-info-box icon="linearicons-archive2" icon_size="25" icon_color="#ffffff" icon_style="circle" icon_color_bg="__USE_THEME_MAIN_COLOR__" title="Multiple Header Layouts" pos="left" title_font_size="desktop:19px;"]Credibly leverage other’s viral supply chains with parallel  e-business applications[/bsf-info-box][bsf-info-box icon="linearicons-fire" icon_size="25" icon_color="#ffffff" icon_style="circle" icon_color_bg="__USE_THEME_MAIN_COLOR__" title="Visual Drag &amp; Drop Page Builder" pos="left" title_font_size="desktop:19px;"]Credibly leverage other’s viral supply chains with parallel  e-business applications[/bsf-info-box][bsf-info-box icon="linearicons-film2" icon_size="25" icon_color="#ffffff" icon_style="circle" icon_color_bg="__USE_THEME_MAIN_COLOR__" title="Built-In Mega Menus" pos="left" title_font_size="desktop:19px;"]Credibly leverage other’s viral supply chains with parallel  e-business applications[/bsf-info-box][/vc_column_inner][vc_column_inner width="1/2"][/vc_column_inner][/vc_row_inner][/verticaltab][verticaltab title="Our Mission" tab_id="1500650492448-2-5c94b-e331"][vc_row_inner equal_height="yes"][vc_column_inner el_class="home-padding1" width="1/2"][vc_empty_space height="20px"][vc_custom_heading text="Design and develop the best creative solutions" font_container="tag:h2|text_align:left|color:%23d23d5e|line_height:1.2em" use_theme_fonts="yes"][vc_empty_space height="25px"][vc_column_text]Energistically promote multimedia based methods of empowerment through e-business information. Compellingly restore out-of-the-box customer service via functionalized web-readiness.[/vc_column_text][vc_btn title="GET IN TOUCH" style="custom" custom_background="__USE_THEME_MAIN_COLOR__" custom_text="#ffffff" shape="round" size="sm" align="left"][/vc_column_inner][vc_column_inner width="1/2"][/vc_column_inner][/vc_row_inner][/verticaltab][/verticaltabs][/vc_column][/vc_row]
CONTENT;
vc_add_default_templates($data);

/*FIM NOVO SKUDO*/

}

?>