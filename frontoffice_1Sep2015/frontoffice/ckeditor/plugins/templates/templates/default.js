﻿/*
 Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.md or http://ckeditor.com/license
*/  
//CKEDITOR.addTemplates("default",{imagesPath:CKEDITOR.getUrl(CKEDITOR.plugins.getPath("templates")+"templates/images/"),templates:[{title:"Image and Title",image:"template1.gif",description:"One main image with a title and text that surround the image.",html:'<h3><img src=" " alt="" style="margin-right: 10px" height="100" width="100" align="left" />Type the title here</h3><p>Type the text here</p>'},{title:"Statistics",image:"template4.gif",description:"Statistics ",html:'<h1 class="heading">Statistics</h1> <ol class="actslist"> <li><a href="Uploads/LargeAndMediumStats.pdf" target="_blank" style="font-size: 15px;">Large and Medium</a></li><li><a href="">Exporting Industrial Units</a> <ul> <li><a href="Uploads/DistrictWise.pdf"<li><a href="" target="_blank">Item-Wise</a></li> </ul> </li><li><a href="Uploads/LargeAndMediumStats.pdf" target="_blank" style="font-size: 15px;">Large and Medium</a></li></ol>'},{title:"MSMED Act, 2006",image:"template5.gif",description:"MSMED Act, 2006 ",html:'<h1 class="heading">MSMED Act, 2006</h1><ul class="small-block-grid-2"><li><div class="NewsBox"><div class="blackBox">Act</div><div class="NewsInner"><ul class="mainLink"><li><a href="Uploads/MSMED-Act,2006.pdf" target="_blank">MSMED Act, 2006</a></li></ul> </div></div></li><li><div class="NewsBox"><div class="blackBox">Notifications</div><div class="NewsInner"><ul class="mainLink"><li><a href="Uploads/Authority_for_filing_EM.pdf" target="_blank">Authority for filing EM by Manufacturing Medium Enterprises</a></li><li><a href="Uploads/Principal_Notification.pdf" target="_blank">Principal Notification for MSME Act 2006</a></li><li><a href="Uploads/Recommendation_of_Advisory_Committee.pdf" target="_blank">Classification of Enterprises</a></li> <li><a href="Uploads/S.O.1722(E).pdf" target="_blank">Items to be excluded for the purpose of calculations of investment in Plant & Machinery of MSMEs. </a></li><li><a href="Uploads/S.O.1909(E).pdf" target="_blank">Authority for filling EM by Medium Service Enterprises. </a></li> <li><a href="Uploads/NOTI20APR2007.pdf" target="_blank">MSME Notifications </a></li><li><a href="Uploads/nbsme.pdf" target="_blank">Notification for First National Board for Micro, Small And Medium Enterprises </a></li><li><a href="Uploads/amended_format_for_EM.pdf" target="_blank">Amended format for the Entrepreneurs Memorandum under the MSMED ACT 2006 after inclusion of the amendments vide notification NO. S.O.941(E) dated 07.06.2007 </a></li><li><a href="Uploads/ammended_EM.pdf" target="_blank">Amendments in the Format of Entrepreneurs Memorandum</a></li><li><a href="Uploads/Advisory_Committee.pdf" target="_blank">Constitution of Advisory Committee </a></li><li><a href="Uploads/AmendedformatfortheEM(2009).pdf" target="_blank">Amended format for the Entrepreneurs Memorandum under the MSMED ACT 2006 after inclusion of the amendments vide notification NO. S.O.941(E) dated 07.6.2007 and notification NO. S.O.200(E) dated 16.1.2009  </a></li><li><a href="Uploads/SO2315(e).pdf" target="_blank">Reconstitution of Advisory Committee </a></li> <li><a href="Uploads/GSR-719-E.pdf" target="_blank">Form for Information to be Furnished for Assessment of Investment in Plant and Machinery or Equipment</a></li><li><a href="Uploads/SO-29(E).pdf" target="_blank">Notification for Second National Board for Micro, Small And Medium Enterprises</a></li><li><a href="Uploads/msmenewact2011.pdf" target="_blank">Notification for appointment of Shri Oscar Fernandes, Member of NBMSME</a></li> <li><a href="Uploads/NOTI31DEC2010.pdf">Notification December 31, 2010</a></li><li><a href="Uploads/SO837.pdf" target="_blank">Reconstitution of Advisory Committee </a></li><li><a href="Uploads/NOTI14 SEP2012.pdf" target="_blank">Notification September 14, 2012</a></li><li><a href="Uploads/act 30.11.2012.pdf" target="_blank">Suggestion to MSEs for printing EM acknowledgement no.On their letterhead/bill/books/vouchers etc.</a></li><li><a href="Uploads/Cazette of india.pdf" target="_blank">The Establishment of National Board - 2013 for Micro, Small and Medium Enterprises</a></li><li><a href="Uploads/NOTI 6FEB2013.pdf" target="_blank">Notification February 6, 2013</a></li><li><a href="Uploads/NOTI20_26FEB2013.pdf" target="_blank">Notification February 20/26, 2013</a></li><li><a href="Uploads/gsr719(e).pdf" target="_blank">Notification :- Section 22 relating to "Requirement to specify unpaid amount with interest in the annual statement of accounts" </a></li><li><a href="Uploads/Rules_of_NB_MSME_Act.pdf" target="_blank">Rules of National Board for Micro Small and Medium Enterprises</a></li></ul></div></div></li> </ul>'}]});
CKEDITOR.addTemplates("default",{imagesPath:CKEDITOR.getUrl(CKEDITOR.plugins.getPath("templates")+"templates/images/"),templates:[{title:"Image and Title",image:"template1.gif",description:"One main image with a title and text that surround the image.",html:'<h3><img src=" " alt="" style="margin-right: 10px" height="100" width="100" align="left" />Type the title here</h3><p>Type the text here</p>'},{title:"Accordion",image:"template2.gif",description:"Accordion",html:'<dl class="accordion" data-accordion=""><dd class="accordion-navigation active"><a class="new_tab" href="#panel1">Accordion 1</a><div class="content active" id="panel1"><dl class="tabs" data-tab=""><dd><a class="new_tab" href="#panel2-1">Tab 1</a></dd><dd><a class="new_tab" href="#panel2-2">Tab 2</a></dd> <dd><a class="new_tab" href="#panel2-3">Tab 3</a></dd><dd class="active"><a class="new_tab" href="#panel2-4">Tab 4</a></dd> </dl><div class="tabs-content"><div class="content" id="panel2-1"><p>First panel content goes here...</p></div><div class="content" id="panel2-2"><p>Second panel content goes here...</p></div><div class="content" id="panel2-3"><p>Third panel content goes here...</p></div><div class="content active" id="panel2-4"><p>Fourth panel content goes here...</p></div> </div></div></dd><dd class="accordion-navigation"><a class="new_tab" href="#panel2">Accordion 2</a><div class="content" id="panel2">Panel 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div></dd><dd class="accordion-navigation"><a class="new_tab" href="#panel3">Accordion 3</a><div class="content" id="panel3">Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div></dd></dl>'},{title:"Statistics",image:"template4.gif",description:"Statistics ",html:'<h1 class="heading">Statistics</h1> <ol class="actslist"> <li><a href="Uploads/LargeAndMediumStats.pdf" target="_blank" style="font-size: 15px;">Large and Medium</a></li><li><a href="">Exporting Industrial Units</a> <ul> <li><a href="Uploads/DistrictWise.pdf"<li><a href="" target="_blank">Item-Wise</a></li> </ul> </li><li><a href="Uploads/LargeAndMediumStats.pdf" target="_blank" style="font-size: 15px;">Large and Medium</a></li></ol>'},{title:"MSMED Act, 2006",image:"template5.gif",description:"MSMED Act, 2006 ",html:'<h1 class="heading">MSMED Act, 2006</h1><ul class="small-block-grid-2"><li><div class="NewsBox"><div class="blackBox">Act</div><div class="NewsInner"><ul class="mainLink"><li><a href="Uploads/MSMED-Act,2006.pdf" target="_blank">MSMED Act, 2006</a></li></ul> </div></div></li><li><div class="NewsBox"><div class="blackBox">Notifications</div><div class="NewsInner"><ul class="mainLink"><li><a href="Uploads/Authority_for_filing_EM.pdf" target="_blank">Authority for filing EM by Manufacturing Medium Enterprises</a></li><li><a href="Uploads/Principal_Notification.pdf" target="_blank">Principal Notification for MSME Act 2006</a></li><li><a href="Uploads/Recommendation_of_Advisory_Committee.pdf" target="_blank">Classification of Enterprises</a></li> <li><a href="Uploads/S.O.1722(E).pdf" target="_blank">Items to be excluded for the purpose of calculations of investment in Plant & Machinery of MSMEs. </a></li><li><a href="Uploads/S.O.1909(E).pdf" target="_blank">Authority for filling EM by Medium Service Enterprises. </a></li> <li><a href="Uploads/NOTI20APR2007.pdf" target="_blank">MSME Notifications </a></li><li><a href="Uploads/nbsme.pdf" target="_blank">Notification for First National Board for Micro, Small And Medium Enterprises </a></li><li><a href="Uploads/amended_format_for_EM.pdf" target="_blank">Amended format for the Entrepreneurs Memorandum under the MSMED ACT 2006 after inclusion of the amendments vide notification NO. S.O.941(E) dated 07.06.2007 </a></li><li><a href="Uploads/ammended_EM.pdf" target="_blank">Amendments in the Format of Entrepreneurs Memorandum</a></li><li><a href="Uploads/Advisory_Committee.pdf" target="_blank">Constitution of Advisory Committee </a></li><li><a href="Uploads/AmendedformatfortheEM(2009).pdf" target="_blank">Amended format for the Entrepreneurs Memorandum under the MSMED ACT 2006 after inclusion of the amendments vide notification NO. S.O.941(E) dated 07.6.2007 and notification NO. S.O.200(E) dated 16.1.2009  </a></li><li><a href="Uploads/SO2315(e).pdf" target="_blank">Reconstitution of Advisory Committee </a></li> <li><a href="Uploads/GSR-719-E.pdf" target="_blank">Form for Information to be Furnished for Assessment of Investment in Plant and Machinery or Equipment</a></li><li><a href="Uploads/SO-29(E).pdf" target="_blank">Notification for Second National Board for Micro, Small And Medium Enterprises</a></li><li><a href="Uploads/msmenewact2011.pdf" target="_blank">Notification for appointment of Shri Oscar Fernandes, Member of NBMSME</a></li> <li><a href="Uploads/NOTI31DEC2010.pdf">Notification December 31, 2010</a></li><li><a href="Uploads/SO837.pdf" target="_blank">Reconstitution of Advisory Committee </a></li><li><a href="Uploads/NOTI14 SEP2012.pdf" target="_blank">Notification September 14, 2012</a></li><li><a href="Uploads/act 30.11.2012.pdf" target="_blank">Suggestion to MSEs for printing EM acknowledgement no.On their letterhead/bill/books/vouchers etc.</a></li><li><a href="Uploads/Cazette of india.pdf" target="_blank">The Establishment of National Board - 2013 for Micro, Small and Medium Enterprises</a></li><li><a href="Uploads/NOTI 6FEB2013.pdf" target="_blank">Notification February 6, 2013</a></li><li><a href="Uploads/NOTI20_26FEB2013.pdf" target="_blank">Notification February 20/26, 2013</a></li><li><a href="Uploads/gsr719(e).pdf" target="_blank">Notification :- Section 22 relating to "Requirement to specify unpaid amount with interest in the annual statement of accounts" </a></li><li><a href="Uploads/Rules_of_NB_MSME_Act.pdf" target="_blank">Rules of National Board for Micro Small and Medium Enterprises</a></li></ul></div></div></li> </ul>'}]});