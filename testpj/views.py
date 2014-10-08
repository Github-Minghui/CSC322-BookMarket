from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.
def index(request):
	blah = "Car"
	return render(request,'index.html', {'fork':blah})

def cork(request,name):
	return render(request,'index.html',{'fork':name})
#return  HttpResponse("Hi");