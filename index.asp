<%EnableSessionState=False
host = Request.ServerVariables("HTTP_HOST")

if host = "lepetitmazilloux" or host = "www.lepetitmazilloux.com" then response.redirect("https://lepetitmazilloux.com/")

else
response.redirect("https://www.lepetitmazilloux.com/error.htm")
end if
%>