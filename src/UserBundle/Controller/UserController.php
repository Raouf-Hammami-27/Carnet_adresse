<?php
namespace UserBundle\Controller;
use UserBundle\Entity\Post;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class UserController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $userManager =  $this->get('fos_user.user_manager');
         $entities = $userManager->findUsers();
        return $this->render('UserBundle:User:index.html.twig', array(
                    'entities' => $entities
        ));
    }
  
     //To Change the role of a user to admin
      public function makeAdminAction($id)
    {
        
         $em = $this->getDoctrine()->getManager();
         $post = $em->getRepository('UserBundle:User')->find($id);
         
         unset($post->setRoles);
        $post->setRoles(array('ROLE_ADMIN'));

        $em->persist($post);
        $em->flush();
        return $this->redirect($this->generateUrl('user_index'));

     }
    
}