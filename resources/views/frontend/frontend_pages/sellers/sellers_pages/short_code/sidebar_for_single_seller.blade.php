@if(Config::get('app.locale') == 'en')
                            <div class="widget widget-collapsible widget-contact">
                                <h3 class="widget-title"><span>Contact Vendor</span></h3>
                                <div class="widget-body">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Your Name" />
                                    <input type="text" class="form-control" name="email" id="email_1"
                                        placeholder="you@example.com" />
                                    <textarea name="message" maxlength="1000" cols="25" rows="6"
                                        placeholder="Type your messsage..." class="form-control"
                                        required="required"></textarea>
                                    <a href="#" class="btn btn-dark btn-rounded">Send Message</a>
                                </div>
                            </div>
                            @else
                            <div class="widget widget-collapsible widget-contact">
                                <h3 class="widget-title"><span>Contact Vendor</span></h3>
                                <div class="widget-body">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Your Name" />
                                    <input type="text" class="form-control" name="email" id="email_1"
                                        placeholder="you@example.com" />
                                    <textarea name="message" maxlength="1000" cols="25" rows="6"
                                        placeholder="Type your messsage..." class="form-control"
                                        required="required"></textarea>
                                    <a href="#" class="btn btn-dark btn-rounded">Send Message</a>
                                </div>
                            </div>
                            @endif