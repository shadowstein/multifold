
      <div id="content">
        <h2>Contact Us</h2>
        <form name="Form1" method="post" action="">
        <div id="left-content" align="left">
          <h4>Fill up the Inquiry Form </h4>
          <div id="headlinesContent">Please fill up the form and our technical support, sales, and support will get back to you as soon as possible. </div>
          <div>&nbsp;</div>
            <div id="contactw">First name:</div>
            <div id="contactx"><input type="text" name="cu_fname" value="" class="normaltextbox"> *</div>
            <div id="contactw">Last Name:</div>
            <div id="contactx"><input type="text" name="cu_lname" value="" class="normaltextbox"> *</div>
            <div id="contactw">Company Name:</div>
            <div id="contactx"><input type="text" name="cu_cname" value="" class="normaltextbox"> *</div>
            <div id="contactw">Email:</div>
            <div id="contactx"><input type="text" name="cu_email" value="" class="normaltextbox"> *</div>
            <div id="contactw">Telephone:</div>
            <div id="contactx"><input type="text" name="cu_telno" value="" class="normaltextbox"> *</div> 
            <div id="contactw">Mobile:</div>
            <div id="contactx"><input type="text" name="cu_mobile" value="" class="normaltextbox"></div>
            <div id="contactw">Message:</div>
            <div id="contactx"><textarea name="cu_msg" rows="8" cols="35" style="width: 95%;"></textarea>*</div>
            <div id="contactw">&nbsp;</div>
            <div id="contactx"><input type="submit" value="Submit" class="normalbutton" onClick="javascript(trapper());"><input name="cu_i" type="hidden" id="cu_i" value="form1">
            <input name="p" type="hidden" id="cu_i" value="contactus"></div>                   
        </form>
        </div>

        <div id="right-content" align="left">        
          <h4>Office Info </h4>
          <div id="boxLine">          
            <div id="boxCSide3">            
              <div class="ContentFontA"><strong>10F Platinum 2000 Annapolis St., Greenhills, San Juan, Metro Manila Philippines 1502 &nbsp;</strong><br><br>
                <strong>Sales: (632) 726.14.40</strong> , <strong>(632) 744-8062</strong> <br />
                <strong>Support: (632) 726.26.37 </strong><br />
                <br>
                <br />
              </div>
            </div>
          </div>  
          <div id="boxMLine"></div>       
          <div id="boxLine">          
            <div id="boxCSide3">            
                <div class="ContentFontA"><strong>Email Address: </strong><br />
                <a href="mailto:corporate@multifoldlinks.com">corporate@multifoldlinks.com</a><br />
                <a href="mailto:sales@multifoldlinks.com">sales@multifoldlinks.com</a><br />
                <a href="mailto:hr@multifoldlinks.com">hr@multifoldlinks.com</a><br>
                <br />
                <br>
                <iframe width="300" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps/ms?ie=UTF8&amp;hl=en&amp;msa=0&amp;msid=109647850651680690085.00048dec274d31850cba1&amp;ll=14.608481,121.056676&amp;spn=0.006229,0.006437&amp;z=16&amp;iwloc=00048dec275242175a18e&amp;output=embed"></iframe><br /><small>View <a href="http://maps.google.com/maps/ms?ie=UTF8&amp;hl=en&amp;msa=0&amp;msid=109647850651680690085.00048dec274d31850cba1&amp;ll=14.608481,121.056676&amp;spn=0.006229,0.006437&amp;z=16&amp;iwloc=00048dec275242175a18e&amp;source=embed" style="color:#0000FF;text-align:left">Multi-fold Links Office</a> in a larger map</small>
              </div>
            </div>
          </div>  
          <div id="boxTLine" align="right">&nbsp;</div>
          <div>&nbsp;</div>
          <div>&nbsp;</div>
          <div style="height:1px;">&nbsp;</div>
        </div>
      </div>
<script language="javascript">
  function traperr() {
    ctr="";
    if (document.Form1.cu_fname.value=="") {ctr+="- First Name field is empty\n";}
    if (document.Form1.cu_lname.value=="") {ctr+="- Last Name field is empty\n";}
    if (document.Form1.cu_cname.value=="") {ctr+="- Company Name field is empty\n";}
    if ((document.Form1.cu_email.value=="") || (document.Form1.cu_email.value.indexOf('@') == -1) || (document.Form1.cu_email.value.indexOf('.') == -1)) {ctr+="- E-Mail Address field is empty or invalid\n";}   
    if (document.Form1.cu_telno.value=="") {ctr+="- Phone Number field is empty\n";}                      
    if (document.Form1.cu_msg.value=="") {ctr+="- Message field is empty\n";} 
    if (ctr!=""){
      alert("Some field are missing or invalid form\nPlease check these following field(s)\n\n" + ctr);
      return false;
    } else{return true;}    
  }
</script>