@extends('layouts.govofficialusernavbar')

@section('content')
<form method="POST" action="{{ route('storeTopDigitalCitizenship') }}">
    {{csrf_field()}}
    <section data-aos="fade-down" style="height: 750px;">
        <div style="margin-top: 70px;text-align:center;margin-bottom: 50px;"><span style="font-size: 25px;color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br>Self Assessment -&nbsp;ICT (Top &amp; 2nd Tier Management)</span></div>
        <div class="container align-content-center align-self-center" style="width: 1358px;height: 600px;margin-top: 10px;">
            <div class="d-flex justify-content-center mb-auto mb-md-auto" data-aos="fade-right" data-aos-duration="1000" style="width: 1358px;height: 163px;margin-top: 20px;background: #1f2471;border-radius: 10px;margin-left: -30px;">
                <div class="text-center d-flex flex-column justify-content-center" style="width: 1358px;height: 194px;color: rgb(255, 255, 255);background: #ffffff;padding-top: 0px;text-align: center;border-radius: 10px;border: 1px solid #1f2471;padding-bottom: 0px;margin-top: 25px;"><span style="color: var(--bs-body-bg);font-size: 20px;font-family: Poppins, sans-serif;font-weight: bold;height: 90px;padding-bottom: 0px;margin-bottom: -42px;background: #E52F72;margin-top: -48px;border-radius: 5px;"><br>Competency Area: Digital Citizenship<br><br><br></span><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;text-align: center;font-weight: bold;padding-top: 0px;margin-bottom: -12px;margin-top: 10px;"><br><br>Competency Area Description: Use of digital technology and media in safe responsible and ethical ways.<br><br><br></span></div>
            </div>
            <div data-aos="fade-down" data-aos-duration="1000" style="width: 1282px;height: 2860px;margin-top: 80px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
                <div class="row" style="margin-top: 20px;">
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;">6) What is True/ False about the Digital Citizen Identity?</span></div>
                </div>
                <div class="table-responsive" style="font-family: Poppins, sans-serif;font-size: 20px;margin-left: 80px;">
                    <table class="table">
                        <thead>
                            <tr style="margin-top: 10px;">
                                <th></th>
                                <th style="color: #1f2471;text-align: center;">True</th>
                                <th style="color: #1f2471;text-align: center;">False</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="margin-top: 10px;">
                                <td style="color: rgb(0,0,0);width: 900px;">a) Employees are given a single identity to access applications, referred to as a single sign-on (SSO) solution.&nbsp;</td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict6_1" value="5" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"> </td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict6_1" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                            </tr>
                            <tr>
                                <td style="color: rgb(0,0,0);margin-bottom: 0px;">b) Providing a digital identity to every citizen is an efficient means for governments to facilitate and secure everyone's access to public and private Digital Services&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict6_2" value="5" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict6_2" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                            </tr>
                            <tr>
                                <td style="color: rgb(0,0,0);margin-bottom: 0px;">c) A digital identity is comprised of characteristics, or data attributes, such as the following: Username and password. Online search activities, like electronic transactions.&nbsp;&nbsp;&nbsp; </td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict6_3" value="5" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict6_3" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                            </tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                        </tbody>
                    </table>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;">7) What is True/ False about balanced Use of technology?</span></div>
                </div>
                <div class="table-responsive" style="font-family: Poppins, sans-serif;font-size: 20px;margin-left: 80px;">
                    <table class="table">
                        <thead>
                            <tr style="margin-top: 10px;">
                                <th></th>
                                <th style="color: #1f2471;text-align: center;">True</th>
                                <th style="color: #1f2471;text-align: center;">False</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="margin-top: 10px;">
                                <td style="color: rgb(0,0,0);width: 900px;">a) Using technology in a way that doesn't have a positive effect on your personal life or relationships is meant by technological balance.</td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict7_1" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"> </td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict7_1" value="5" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                            </tr>
                            <tr>
                                <td style="color: rgb(0,0,0);margin-bottom: 0px;">b) Too much technology use can leave you feeling tired, stressed, overworked, and mentally exhausted.</td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict7_2" value="5" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict7_2" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                            </tr>
                            <tr>
                                <td style="color: rgb(0,0,0);margin-bottom: 0px;">c) Regular use of technology is messing with our health mainly in the form of vision problems, insomnia, obesity, and hearing problems too. </td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict7_3" value="5" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict7_3" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                            </tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                        </tbody>
                    </table>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>8) What is True about Cyberbullying?</span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" style="text-align: center;">
                            <div class="col">
                                <div class="row d-flex flex-column" style="text-align: center;">
                                    <div class="col">
                                        <div class="row d-flex flex-column" style="text-align: center;">
                                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col" style="margin-top: 10px;"><input type="radio" name="ict8" id="ict8_1" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict8_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 0px;width: 1100px;">a) Cyberbullying includes sending, posting, or sharing negative, harmful, false, or mean content about someone else</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="ict8" id="ict8_2" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict8_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">&nbsp; &nbsp; &nbsp; &nbsp; b) Cyberbullying is acted through digital tools, it is often anonymous, and aims to destroy and psychologically&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;humiliate the victim</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="ict8" id="ict8_3" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict8_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">&nbsp; &nbsp; &nbsp; &nbsp; c) Cyber bullying refers to bullying or harassment of any kind inflicted through electronic or communication&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;devices</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="ict8" id="ict8_4" value="5" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict8_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of the above</label></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: -20px;">
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>9) Below are few cyber security tips which will help you to be protected in the cyber space. Identify the Incorrect statement?</span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" style="text-align: center;">
                            <div class="col">
                                <div class="row d-flex flex-column" style="text-align: center;">
                                    <div class="col">
                                        <div class="row d-flex flex-column" style="text-align: center;">
                                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="ict9" id="ict9_1" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict9_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Use Strong Passwords &amp; Use a Password Management Tool</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="ict9" id="ict9_2" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict9_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Use Anti-Virus Protection &amp; Firewall</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="ict9" id="ict9_3" value="5" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict9_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Use Public Wi-Fi</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="ict9" id="ict9_4" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict9_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Protect your sensitive personal information</label></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: -20px;">
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>10) What is true about Digital Empathy?</span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" style="text-align: center;">
                            <div class="col">
                                <div class="row d-flex flex-column" style="text-align: center;">
                                    <div class="col">
                                        <div class="row d-flex flex-column" style="text-align: center;">
                                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="ict10" id="ict10_1" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict10_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) It is how your digital touchpoints understand and react to the feelings of the person engaging with them</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="ict10" id="ict10_2" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict10_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">&nbsp; &nbsp; &nbsp; &nbsp; b) One of the most effective ways to show digital empathy is to not only understand your audience, but to provide&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;and share with them information that is relevant to their needs.</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="ict10" id="ict10_3" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict10_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">&nbsp; &nbsp; &nbsp; &nbsp; c) Digital Empathy improves the breadth and quality of data by transforming transactional relationships into&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;deeper ongoing trusting relationships</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="ict10" id="ict10_4" value="5" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict10_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of the above</label></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: -20px;">
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>11) Which of the following action can be taken to keep the digital footprint clean?</span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" style="text-align: center;">
                            <div class="col">
                                <div class="row d-flex flex-column" style="text-align: center;">
                                    <div class="col">
                                        <div class="row d-flex flex-column" style="text-align: center;">
                                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="ict11" id="ict11_1" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict11_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Search what information you leftover social media and the internet</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="ict11" id="ict11_2" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict11_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Be smart and sensible while using any website, sending an email or opening a link</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="ict11" id="ict11_3" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict11_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Control visibility settings from the browser or website/app settings</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="ict11" id="ict11_4" value="5" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict11_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Remove any private details like mobile number, school, college name, address, photos etc</label></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;">12) Mark as True/ False regarding Media and Information Literacy?</span></div>
                </div>
                <div class="table-responsive" style="font-family: Poppins, sans-serif;font-size: 20px;margin-left: 80px;">
                    <table class="table">
                        <thead>
                            <tr style="margin-top: 10px;">
                                <th></th>
                                <th style="color: #1f2471;text-align: center;">True</th>
                                <th style="color: #1f2471;text-align: center;">False</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="margin-top: 10px;">
                                <td style="color: rgb(0,0,0);width: 900px;">a) Media and Information Literacy consists of the knowledge, the attitudes, and the sum of the skills needed to know when and what information is needed&nbsp;</td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict12_1" value="5" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"> </td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict12_1" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                            </tr>
                            <tr>
                                <td style="color: rgb(0,0,0);margin-bottom: 0px;">b)&nbsp;Being able to assess, evaluate information, critically thinking and using the information effectively, and creating messages are the important aspects of Media, Information, and Technology literacies.&nbsp;&nbsp; </td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict12_2" value="5" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict12_2" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                            </tr>
                            <tr>
                                <td style="color: rgb(0,0,0);margin-bottom: 0px;">c) Media and information literacy will enhance the capacity of people to enjoy their fundamental human rights </td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict12_3" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict12_3" value="5" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                            </tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                        </tbody>
                    </table>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>13) &nbsp;_______________deals with the protection of an individual’s information which is implemented while using the Internet on any computer or personal device</span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" style="text-align: center;">
                            <div class="col">
                                <div class="row d-flex flex-column" style="text-align: center;">
                                    <div class="col">
                                        <div class="row d-flex flex-column" style="text-align: center;">
                                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="ict13" id="ict13_1" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict13_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Digital agony</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="ict13" id="ict13_2" value="5" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict13_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Digital privacy</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="ict13" id="ict13_3" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict13_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Digital secrecy</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="ict13" id="ict13_4" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict13_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Digital protection</label></div>
                                                </div>
                                                <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
                                                <input class="form-control" type="hidden" id="totTopIctInWorkplace" name="totTopIctInWorkplace" value="{{ $totTopIctInWorkplace }}" readonly>
                                                <input class="form-control" type="hidden" id="totTopInformationManagement" name="totTopInformationManagement" value="{{ $totTopInformationManagement }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<div class="row" style="margin-right: 0px;margin-top: 2550px;margin-left: 850px;font-family: Poppins, sans-serif;margin-bottom:50px">
    <div class="col"><a class="btn btn-primary" href="{{ route('toplayer') }}" "type="button" style="color: #EF4323;width: 174px;height: 55px;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;margin-right: 30px;border-radius: 10px;">Resume</a>
        <button class="btn btn-primary" type="submit" style="width: 174px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;font-size: 20px;font-weight: bold;border-radius: 10px;">Next</button></div>
</div>
</form>
@endsection

