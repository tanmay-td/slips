import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;
public class Emp extends HttpServlet
{
   static int cnt;
  public void doGet(HttpServletRequest req,HttpServletResponse res) throws IOException,ServletException
  {
         res.setContentType("text/html");
         PrintWriter pw=res.getWriter();
            cnt++;
         Cookie c=new Cookie("Count",Integer.toString(cnt));
         res.addCookie(c);
  
         if(cnt==1) 
         {
            pw.println("WelCome");
         }  
         else
         {
             Cookie ck[]=req.getCookies();
             String val=ck[0].getValue();
             pw.println(val);
         }  
    }
}
