import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;
import java.sql.*;
public class Login extends HttpServlet
{
   public void doGet(HttpServletRequest req,HttpServletResponse res) throws IOException,ServletException
   {
         res.setContentType("text/html");
         PrintWriter pw=res.getWriter();
         try
         {
            String u=req.getParameter("t1");
            String p=req.getParameter("t2");
    int ff=0;
            Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
            Connection cn=DriverManager.getConnection("jdbc:odbc:dyp","","");
            Statement st=cn.createStatement();

            ResultSet rs=st.executeQuery("select * from login");
            while(rs.next()) 
            {
               String un=rs.getString(1);
               String ps=rs.getString(2);
               if((u.equals(un)) && (ps.equals(p)))
               {
                  pw.println("Login");
                  ff=1;
                  break;
               }
               else
                     ff=0;
             }  
           if(ff==0)
           {
                 pw.println("Not Found");
           }
       }
        catch(Exception obj)
        {
        }

   }
}