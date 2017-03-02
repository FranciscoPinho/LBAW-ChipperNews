function changeDropdown(option) {
	$('span.droptext').empty();
	$('span.droptext').append(option);
	switch (option) {
		case 'Me':
			$('.container.article-snip').show();
			$('.container.article-snip.friend').hide();
			break;
		case 'Mixed':
			$('.container.article-snip.friend').show();
			$('.container.article-snip').show();
			break;
		case 'Friends':
			$('.container.article-snip').hide();
			$('.container.article-snip.friend').show();
			break;
	}
}

function fullStory(snipID) {
	element = document.getElementById(`article-snip-${snipID}`);
	$(element.getElementsByClassName("expand")).remove();
	switch (snipID) {
		case '1':
			$(element).append(`<p>Recently, the number of processing cores per CPU has rapidly scaled up, but they quickly reached the point of diminishing returns. Now, getting the most processing power for each Watt seems to be the key measure of performance.</p>
				<p>None of these things happened because the companies making processors ran up against hard physical limits. Rather, computing power ended up being constrained because progress in certain areas-primarily energy efficiency-was slow compared to progress in others, such as feature size. But could we be approaching physical limits in processing power? In this week's edition of Nature, The University of Michigan's Igor Markov takes a look at the sorts of limits we might face.</p>
				<p>Markov notes that, based on purely physical limitations, some academics have estimated that Moore's law had hundreds of years left in it. In contrast, the International Technology Roadmap for Semiconductors (ITRS), a group sponsored by the major semiconductor manufacturing nations, gives it a couple of decades. And the ITRS can be optimistic; it once expected that we would have 10GHz CPUs back in the Core2 days. The reason for this discrepancy is that a lot of hard physical limits never come into play.</p>
				<br>
				<div class="rate">
				<button type="button" class="btn btn-default btn-circle"  id="btnlike">
					<img src="./img/chipart1.png" alt="" style="width:100%;height:100%;"> 
				</button>
				<button type="button" class="btn btn-default btn-circle"  id="btndislike">
					<img src="./img/chipart1.png" alt="" style="width:100%;height:100%;filter:hue-rotate(198deg);"> 
				</button>
				<script>
				$('#btnlike').on("click",function(){
				
				if($('#btndislike').is(":disabled")){
					$('#btndislike').prop("disabled",false);
				}
				else {
					$('#btndislike').prop("disabled",true);
				}
				});

				$('#btndislike').on("click",function(){
				
				if($('#btnlike').is(":disabled")){
					$('#btnlike').prop("disabled",false);
				}
				else {
					$('#btnlike').prop("disabled",true);
				}
				});
			
				</script>

				</div>
				<br>`);
			break;

		case '2':
			$(element).append(`<p>Let's have a look at a few different benchmarks people have done.</p>
			<div class="container" style=" width: 50%; height: auto;">
			<img src="http://hostingadvice.digitalbrandsinc.netdna-cdn.com/wp-content/uploads/2015/03/nodejs-vs-php-performance-requests-per-second.png" alt="" style=" width: 100%; height: auto;">
			</div>
			<p>We can see that PHP is at a clear disadvantage in these types of requests</p>
			<br>
			<div class="rate">
				<button class="btn btn-default" type="button" id="btnlike">
					<img src="./img/chipart1.png" alt="" style="width:100%;height:100%;"> 
				</button>
				<button class="btn btn-default" type="button" id="btndislike">
					<img src="./img/chipart1.png" alt="" style="width:100%;height:100%;filter:hue-rotate(198deg);"> 
				</button>
				<script>
				$('#btnlike').on("click",function(){
				
				if($('#btndislike').is(":disabled")){
					$('#btndislike').prop("disabled",false);
				}
				else {
					$('#btndislike').prop("disabled",true);
				}
				});

				$('#btndislike').on("click",function(){
				
				if($('#btnlike').is(":disabled")){
					$('#btnlike').prop("disabled",false);
				}
				else {
					$('#btnlike').prop("disabled",true);
				}
				});
			
				</script>
			</div>
	
			<br>`);
			break;

		case '3':
			$(element).append(`<ul>
			<li><p>Workplace. any project where performance is a constraint will likely use C++. Even all the parallel programming languages/techniques (Cuda, MPI, etc) rely on your knowledge of C++ (pointer, dereferencing, arithmetic, etc) to accomplish a task. In my field of computer architecture, for instance, every famous simulator out there is written in C++.  Embedded systems (an area that keeps growing) is highly biased towards C.  Operating Systems, Computer Networks, Graphics.. yeap, most projects are coded in C++.</p></li>
			<li><p>Interviewing.  Most programming interview questions are meant to be written in C++ given they often focus on Linked list, BST, Heaps.  Although you can code all these in other languages, doing pointer arithmetic in C++ is highly beneficial and many interviewers explicitly ask you to program it in C/C++.</p></li>
			<li><p>In general, there is absolutely no other language more worthwhile learning than C/C++ (even though it might not be BEST language). Every field has its preferred language (web-> PHP, database->mySQL, scripting->Perl,Python, Computational->matlab, etc) but in general you just can't go wrong with C++.</p></li>
			</ul>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/NvWTnIoQZj4" frameborder="0" allowfullscreen></iframe>
			<p id="vid">Related: C++ Creator Bjarne Stroustrup names the top 5 relevant languages to know</p>
			<br>
			<div class="rate">
				<button class="btn btn-default" type="button" id="btnlike">
					<img src="./img/chipart1.png" alt="" style="width:100%;height:100%;"> 
				</button>
				<button class="btn btn-default" type="button" id="btndislike">
					<img src="./img/chipart1.png" alt="" style="width:100%;height:100%;filter:hue-rotate(198deg);"> 
				</button>
				<script>
				$('#btnlike').on("click",function(){
				
				if($('#btndislike').is(":disabled")){
					$('#btndislike').prop("disabled",false);
				}
				else {
					$('#btndislike').prop("disabled",true);
				}
				});

				$('#btndislike').on("click",function(){
				
				if($('#btnlike').is(":disabled")){
					$('#btnlike').prop("disabled",false);
				}
				else {
					$('#btnlike').prop("disabled",true);
				}
				});
			
				</script>
		</div>
			
				<br>`);
			break;

		case '4':
			$(element).append(`
				<p>Python as a Programming Language is a very great resource for programmers and Python is also an Open Source Programming Language , so it is very updated as million’s of minds are operating or using the language, there are many updates on the language and with each update it becomes more powerful and more robust.</p>
			
				<p>The Python Language may be one of the most used and powerful language in the agonizing future. The reasons for Python to be an emerging language</p>
			
				<h4 style="font-weight:bold">1. Easy-to-Learn<h5>
				<p>Let’s face it. Learning a programming language doesn’t sound as exciting as a breakdance competition on an aircraft carrier. Luckily, Python was designed with the newcomer in mind. Python reads like kindergarten math and is easy on the layman’s eye. The use of white space and common expressions has eliminated the need for tedious variable declarations and unattractive curly brackets. Python also requires less code to complete basic tasks, making it an economical language to learn. Python code is often 3-5 times shorter than Java, and 5-10 times shorter than C++. But while Python is easy to learn in itself, we all know the peril of studying alone and unprepared. Homer Simpson did that in college and look where it got him. Fortunately, the Python community has amassed an <a href="https://wiki.python.org/moin/BeginnersGuide/Programmers" target="_blank" style="color:blue; text-decoration:none;">ample collection of resources</a> to keep you safe and productive.</p>
				<h4 style="font-weight:bold">2. Your Stepping Stone<h5>
				<p>Python can be your stepping stone into the programming universe. Employers are looking for fully stacked programmers and Python will help you get there. Python is an object-oriented language, just like Javascript, C++, C#, Perl, Ruby, and other key programming languages. For people planning to become software developers, learning this type of programming in one area will help you adapt easily in other environments.</p>
				<br>
				<p>Specifically, a working knowledge of Python can be a solid foundation because Python’s methodologies can be used in a broad range of applications. For example, Python’s inherent organization and architecture can act as your Rosetta Stone when trying to decipher more cryptic programming languages. Here’s a brief comparison of Python with two other languages: Ruby and PHP. Ruby has a similar structure to Python while PHP has a very different syntax.</p>
				<br>
				<p>A “for” loop on a list [Python]:</p>
				<div class="container" style=" width: 70%; height: 100%;">
				<img src="https://qph.ec.quoracdn.net/main-qimg-7e16f22db479695d687158c34db6c000-p" alt="..." style=" width: 100%; height: auto;">
				</div>
				<br>
				<h4 style="font-weight:bold">3. Web programming</h5>
				<p>Python is at home on the web, unlike a low-level language like C. Frameworks like Django, Pyramid, and Flask give students the ability to create real web applications that have the same power as the sites they use every day. Flask is my personal favorite for teaching because, in combination with a free Heroku account, students can have their own Simple blog deployed in under an hour. And adding their first route to a web app is simple as well:
				<pre><code>@app.route("/about")	
def about():
	return render_template("about.html", now=datetime.datetime.now())</code></pre>
				<p>This code isn’t trivial but is readable by students after only a few sessions. Knowing how to route web applications in even the most basic way is a huge step forward in terms of confidence and curiosity.</p>
				<br>
				<div class="rate">
					<button class="btn btn-default" type="button" id="btnlike">
						<img src="./img/chipart1.png" alt="" style="width:100%;height:100%;"> 
					</button>
					<button class="btn btn-default" type="button" id="btndislike">
						<img src="./img/chipart1.png" alt="" style="width:100%;height:100%;filter:hue-rotate(198deg);"> 
					</button>
				<script>
					$('#btnlike').on("click",function(){
						if($('#btndislike').is(":disabled")){
							$('#btndislike').prop("disabled",false);
						}
						else {
							$('#btndislike').prop("disabled",true);
						}
					});

					$('#btndislike').on("click",function(){
						if($('#btnlike').is(":disabled")){
							$('#btnlike').prop("disabled",false);
						}
						else {
							$('#btnlike').prop("disabled",true);
						}
					});
				</script>
				</div>
			
				<br>`);
			break;
	}

}

