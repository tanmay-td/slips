<%
   String u,p;
   p=request.getParameter("t2");
   u=(String)session.getAttribute("un");
   if(u.compareTo(p)==0)
   {
      out.println("Valid");
   }
   else
   {
      out.println("Not");
   }
%>