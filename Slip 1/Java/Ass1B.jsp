<%
   String u;
   u=request.getParameter("t1");
   session.setAttribute("un",u);
   response.sendRedirect("Ass1BPass.html");
%>