import java.net.*;
import java.io.*;
class writejsontxt {
    public static void main(String[] args) {
    	String web = "http://data.kaohsiung.gov.tw/Opendata/DownLoad.aspx?Type=2&CaseNo1=AP&CaseNo2=9&FileType=1&Lang=C&FolderType=O";
    	read1(web);

    }
    public static void read1(String web){
    	int chunksize = 4096;
    	byte[] chunk = new byte[chunksize];
    	int count;
    	try{
    	URL pageUrl = new URL(web);
       
             
            BufferedInputStream bis = new BufferedInputStream(pageUrl.openStream());
            BufferedOutputStream bos = new BufferedOutputStream(new FileOutputStream("URL1.txt", false));
            System.out.println("read1() running " );
            while ((count = bis.read(chunk, 0, chunksize)) != -1) {
                bos.write(chunk, 0, count); 
            }
            bos.close();
            bis.close();
          
          System.out.println("Done");   
         }catch (IOException e) {
             e.printStackTrace();
         }
      }
}