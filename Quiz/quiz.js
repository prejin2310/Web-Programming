
function result(){
	let score=0

	 if(document.getElementById('q13').checked){
	 	score+=1
	 }
	 if(document.getElementById('q22').checked){
	 	score+=1
	 }
	 if(document.getElementById('q31').checked){
	 	score+=1
	 }

alert("You've completed the Quiz!" + '\n' + "Your score: "+score+" of 3")
}
